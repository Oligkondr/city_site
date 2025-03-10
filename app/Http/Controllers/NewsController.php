<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Inertia\Response;

class NewsController extends Controller
{
    public function index(): Response
    {
        $currentCategory = request('category');

        $queue = News::query();

        if ($currentCategory) {
            $queue->whereHas('category', function ($query) use ($currentCategory) {
                $query->where('slug', $currentCategory);
            });
        }

        return inertia('News/Index', [
            'list' => $queue
                ->orderByDesc('created_at')
                ->paginate()
                ->withQueryString(),
            'categories' => NewsCategory::all(),
            'currentCategory' => $currentCategory,
        ]);
    }

    public function detail(News $news): Response
    {
        return inertia('News/Detail', [
            'news' => $news,
        ]);
    }
}
