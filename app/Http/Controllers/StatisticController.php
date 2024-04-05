<?php

namespace App\Http\Controllers;

use App\Trait\TableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StatisticController extends Controller
{
     use TableTrait;

    public function frontIndex()
    {
        $social      = $this->getTable('sosial');
        $economy     = $this->getTable('ekonomi');
        $agriculture = $this->getTable('pertanian');

        return view('frontend.statistic.index', [
            'socialTables'      => $social,
            'economyTables'     => $economy,
            'agricultureTables' => $agriculture,
        ]);
    }

    public function frontShow(string $category, string $value)
    {
        return view('frontend.statistic.detail', [
            'category' => $category,
            'filename' => $value
        ]);
    }

    public function backIndex()
    {
        $public = storage_path('app/public/data/');

        $socialFiles      = File::allFiles($public . 'sosial');
        $economyFiles     = File::allFiles($public . 'ekonomi');
        $agricultureFiles = File::allFiles($public . 'pertanian');

        return view('backend.statistic.index', [
            'socialFiles'      => $socialFiles,
            'economyFiles'     => $economyFiles,
            'agricultureFiles' => $agricultureFiles
        ]);
    }

    public function backCreate()
    {
        return view('backend.statistic.builder');
    }

    public function backStore(Request $request)
    {
        $request->validate(['file' => 'required|mimes:xls,xlsx']);

        if ($request->file()) {
            $fileName = $request->file->getClientOriginalName();

            $request->file('file')->storeAs("/data" . "/" . $request->kategori, $fileName, 'public');

            return redirect()->route('backend.statistic.index');
        }
    }

    public function backDestroy(Request $request)
    {
        $filePath = $request->post('filepath');

        File::delete($filePath);

        return redirect()->route('backend.statistic.index');
    }
}
