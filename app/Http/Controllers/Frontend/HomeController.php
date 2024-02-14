<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $social      = $this->getTable('data/sosial');
        $economy     = $this->getTable('data/ekonomi');
        $agriculture = $this->getTable('data/pertanian');

        return view('frontend.home', [
            'socialTables'      => $social,
            'economyTables'     => $economy,
            'agricultureTables' => $agriculture
        ]);
    }

    public function show(string $category, string $value)
    {
        return view('frontend.partials.table-detail', [
            'category' => $category,
            'filename' => $value
        ]);
    }

    private function getTable(string $path)
    {
        $directory = public_path('data/sosial');

        $file      = array_diff(scandir($directory), array('.', '..'));

        return $file;
    }
}
