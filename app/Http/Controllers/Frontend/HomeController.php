<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Trait\TableTrait;

class HomeController extends Controller
{
    use TableTrait;
    public function index()
    {
        $social      = $this->getTable('data/sosial');
        $economy     = $this->getTable('data/ekonomi');
        $agriculture = $this->getTable('data/pertanian');

        return view('frontend.home', [
            'socialTables'      => $social,
            'economyTables'     => $economy,
            'agricultureTables' => $agriculture,
            'news'              => $this->getNews()
        ]);
    }

    public function show(string $category, string $value)
    {
        return view('frontend.partials.table-detail', [
            'category' => $category,
            'filename' => $value
        ]);
    }

    protected function getNews()
    {
        return News::take(5)->orderBy('updated_at', 'desc')->get();
    }
}
