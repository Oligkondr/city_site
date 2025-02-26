<?php

namespace App\Http\Controllers;

use App\Models\News;
use Inertia\Response;

class NewsController extends Controller
{
    public function index(): Response
    {
        $categorySlug = request('category');

        $queue = News::query();

        if ($categorySlug) {
            $queue->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }

        return inertia('News/Index', [
            'list' => $queue
                ->orderByDesc('created_at')
                ->paginate()
                ->withQueryString(),
        ]);
    }

    public function detail(News $news): Response
    {
        return inertia('News/Detail', [
            'news' => $news,
        ]);
    }
}
