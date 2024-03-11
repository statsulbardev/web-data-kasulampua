<?php

namespace App\Http\Controllers;

use App\Models\News;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function frontIndex()
    {
        $news = News::get();

        return view('frontend.news.index', ['news' => $news]);
    }

    public function frontShow(string $id)
    {
        $news = News::findOrFail($id);

        return view('frontend.news.detail', ['news' => $news]);
    }

    public function backIndex()
    {
        $news = News::get();

        return view('backend.news.index', ['news' => $news]);
    }

    public function backCreate()
    {
        return view('backend.news.builder');
    }

    public function backStore(Request $request)
    {
        $fileName = (basename($request->picture->getClientOriginalName(), '.' . $request->picture->getClientOriginalExtension()));

        $imageName = Str::slug($fileName) . '.' . $request->picture->getClientOriginalExtension();

        try {
            $request->picture->move(public_path('assets/img/news/'), $imageName);

            DB::beginTransaction();

            News::create([
                'title' => $request->title,
                'picture' => $imageName,
                'description' => $request->description
            ]);

            DB::commit();
        } catch(ErrorException $error) {
            DB::rollBack();
        }

        return redirect()->route('backend.news.index');
    }

    public function backEdit($id)
    {
        $news = News::findOrFail($id);

        return view('backend.news.update', ['news' => $news]);
    }

    public function update()
    {}

    public function backDestroy(Request $request)
    {
        $newsId = $request->post('newsid');

        // Delete news image

        // Delete news record
        News::where('id', $newsId)->delete();

        return redirect()->route('backend.news.index');
    }
}
