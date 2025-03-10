<?php

namespace App\Console\Commands;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class GetNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get RSS';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('http://lenta.ru/rss/news');
        $xml = simplexml_load_string($response);
        $data = json_decode(json_encode($xml), true);

        foreach ($data['channel']['item'] as $item) {
            $this->comment($item['link']);

            $news = News::firstWhere('link', $item['link']);

            if ($news) {
                continue;
            }

            $category = NewsCategory::firstWhere('name', $item['category']);

            if (!$category) {
                $category = new NewsCategory();
                $category->name = $item['category'];
                $category->save();
            }

            $response = Http::get($item['link']);

            $crawler = new Crawler($response->body(), 'https://lenta.ru/');
            $content = $crawler->filter('.topic-body__content')->text();

            $news = new News();
            $news->link = $item['link'];
            $news->author = $item['author'] ?? '';
            $news->title = $item['title'];
            $news->slug = Str::slug($news->title);
            $news->content = $content;
            $news->publish_at = $item['pubDate'];
            $news->category_id = $category->id;
            $news->save();

            Storage::put(
                "news/news_{$news->id}.jpg",
                file_get_contents($item['enclosure']['@attributes']['url']),
            );
        }
    }
}
