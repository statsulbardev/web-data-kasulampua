<?php

namespace App\Http\Controllers;

use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

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
        $request->validate([
            'title'       => 'required|min:5',
            'picture'     => 'nullable|mimes:png,jpg',
            'description' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $fileName = $request->picture->getClientOriginalName();

            $filePath = $request->file('picture')->storeAs("/news", $fileName, 'public');

            News::create([
                'title'       => $request->title,
                'picture'     => $filePath,
                'description' => $request->description
            ]);

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.news.index');
    }

    public function backEdit($id)
    {
        $news = News::findOrFail($id);

        return view('backend.news.update', ['news' => $news]);
    }

    public function backUpdate($id, Request $request)
    {
        $request->validate([
            'title'       => 'required|min:5',
            'picture'     => 'nullable|mimes:png,jpg',
            'description' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $news = News::findOrFail($id);

            File::delete(storage_path('app/public/' . $news->picture));

            $fileName = $request->picture->getClientOriginalName();

            $filePath = $request->file('picture')->storeAs("/news", $fileName, 'public');

            $news->update([
                'title'       => $request->title,
                'picture'     => $filePath,
                'description' => $request->description
            ]);

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.news.index');
    }

    public function backDestroy(Request $request)
    {
        try {
            DB::beginTransaction();

            $news = News::findOrFail($request->newsId);

            File::delete(storage_path('app/public/' . $news->picture));

            $news->delete();

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.news.index');
    }
}
