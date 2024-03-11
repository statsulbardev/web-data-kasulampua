<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class PublicationController extends Controller
{
    public function frontIndex()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();

        return view('frontend.publication.index', ['publications' => $publications]);
    }

    public function backIndex()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();

        return view('backend.publication.index', ['publications' => $publications]);
    }

    public function backCreate()
    {
        return view('backend.publication.builder');
    }

    public function backStore(Request $request)
    {
        $request->validate([
            'title'   => 'required|min:5',
            'picture' => 'required|mimes:png,jpg',
            'url'     => 'required|min:5'
        ]);

        try {
            DB::beginTransaction();

            $fileName = $request->picture->getClientOriginalName();

            $filePath = $request->file('picture')->storeAs("/publication", $fileName, 'public');

            Publication::create([
                'title'   => $request->title,
                'picture' => $filePath,
                'url'     => $request->url
            ]);

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.publication.index');
    }

    public function backEdit($id)
    {
        $publication = Publication::findOrFail($id);

        return view('backend.publication.update', ['publication' => $publication]);
    }

    public function backUpdate($id, Request $request)
    {
        $request->validate([
            'title'   => 'required|min:5',
            'picture' => 'nullable|mimes:png,jpg',
            'url'     => 'required|min:5'
        ]);

        try {
            DB::beginTransaction();

            $publication = Publication::findOrFail($id);

            File::delete(storage_path('app/public/' . $publication->picture));

            $fileName = $request->picture->getClientOriginalName();

            $filePath = $request->file('picture')->storeAs("/publication", $fileName, 'public');

            $publication->update([
                'title'   => $request->title,
                'picture' => $filePath,
                'url'     => $request->url
            ]);

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.publication.index');
    }

    public function backDestroy(Request $request)
    {
        try {
            DB::beginTransaction();

            $publication = Publication::findOrFail($request->publicationId);

            File::delete(storage_path('app/public/' . $publication->picture));

            $publication->delete();

            DB::commit();
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());
        }

        return redirect()->route('backend.publication.index');
    }
}
