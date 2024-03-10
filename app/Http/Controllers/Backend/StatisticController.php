<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StatisticController extends Controller
{
    public function index()
    {
        $public = storage_path('app/public/data/');

        $socialFiles      = File::allFiles($public . 'sosial');
        $economyFiles     = File::allFiles($public . 'ekonomi');
        $agricultureFiles = File::allFiles($public . 'pertanian');

        return view('backend.statistics.list', [
            'socialFiles'      => $socialFiles,
            'economyFiles'     => $economyFiles,
            'agricultureFiles' => $agricultureFiles
        ]);
    }

    public function create()
    {
        return view('backend.statistics.builder');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        if ($request->file()) {
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs("/data" . "/" . $request->kategori, $fileName, 'public');

            return redirect()->route('statistics.list');
        }
    }


    public function destroy(Request $request)
    {
        $filepath = $request->post('filepath');

        File::delete($filepath);

        return redirect()->route('statistics.list');
    }
}
