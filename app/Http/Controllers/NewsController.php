<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Response;

class NewsController extends Controller
{
    public function index(Request $request): Response
    {
        $list = News::query()
            ->orderByDesc('created_at')
            ->get();

        return inertia('News/Index', [
            'list' => $list,
        ]);
    }

    public function detail(News $news): Response
    {
        return inertia('News/Detail', [
            'news' => $news,
        ]);
    }
}
