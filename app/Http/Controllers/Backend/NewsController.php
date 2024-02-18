<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();

        return view('backend.news.list', [
            'news' => $news
        ]);
    }

    public function create()
    {
        return view('backend.news.builder');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            News::create([
                'title' => $request->title,
                'picture' => $request->picture,
                'description' => $request->description
            ]);

            DB::commit();
        } catch(ErrorException $error) {
            DB::rollBack();
        }

        return redirect()->route('news.list');
    }

    public function edit(string $id)
    {
        $news = News::findOrFail($id);

        return view('backend.news.update', [
            'news' => $news
        ]);
    }

    public function update()
    {}

    public function show(string $id)
    {
        $news = News::findOrFail($id);

        return view('frontend.home-partials.news-detail', ['news' => $news]);
    }
}
