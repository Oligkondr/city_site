<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
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
    protected $description = 'Get news from RSS';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('http://lenta.ru/rss/news');

        $xml = simplexml_load_string($response->body());
        $data = json_decode(json_encode($xml), true);

        foreach ($data['channel']['item'] as $item) {
            $response = Http::get($item['link']);

            $crawler = new Crawler($response->body(), 'https://lenta.ru/');
            $content = $crawler->filter('.topic-body__content')->text();

            $news = new News();
            $news->link = $item['link'];
            $news->author = $item['author'];
            $news->title = $item['title'];
            $news->content = $content;
            $news->publish_at = $item['publish_at'];
            $news->category_id = $item['category_id'];
            $news->save();
        }
    }
}
