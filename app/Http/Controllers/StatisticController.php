<?php

namespace App\Http\Controllers;

use App\Trait\TableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StatisticController extends Controller
{
     use TableTrait;

    public function index()
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

    public function show(string $category, string $value)
    {
        return view('frontend.statistic.detail', [
            'category' => $category,
            'filename' => $value
        ]);
    }
}
