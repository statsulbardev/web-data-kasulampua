<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Publication;
use App\Trait\TableTrait;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    use TableTrait;

    public function index()
    {
        $path = storage_path('app/public/infographic/');

        $infographics = File::exists($path)
            ? File::allFiles($path)
            : null;

        return view('frontend.home.index', [
            'socialTables'      => $this->getTable('sosial'),
            'economyTables'     => $this->getTable('ekonomi'),
            'agricultureTables' => $this->getTable('pertanian'),
            'news'              => News::orderBy('updated_at', 'desc')->take(5)->get(),
            'publications'      => Publication::orderBy('created_at', 'desc')->take(6)->get(),
            'infographics'      => $infographics
        ]);
    }
}
