<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
//        $response = Http::get('http://lenta.ru/rss/news');
//        $xml = $response->body();
//        file_put_contents('file.xml', $xml);
        $xml = file_get_contents('file.xml');
        $new = simplexml_load_string($xml);
        $con = json_encode($new);
        $newArr = json_decode($con, true);
        dd($newArr['channel']['item'][0]);
    }
}
