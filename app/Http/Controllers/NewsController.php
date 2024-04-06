<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();

        return view('frontend.news.index', ['news' => $news]);
    }

    public function show(string $id)
    {
        $news = News::findOrFail($id);

        return view('frontend.news.detail', ['news' => $news]);
    }
}
