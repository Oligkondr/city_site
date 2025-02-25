<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class NewsController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('News/Index');
    }

    public function detail(Request $request): Response
    {
        return Inertia::render('News/Detail');
    }
}
