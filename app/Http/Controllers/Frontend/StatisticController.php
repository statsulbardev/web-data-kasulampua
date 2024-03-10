<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Trait\TableTrait;

class StatisticController extends Controller
{
    use TableTrait;

    public function index()
    {
        $social      = $this->getTable('data/sosial');
        $economy     = $this->getTable('data/ekonomi');
        $agriculture = $this->getTable('data/pertanian');

        return view('frontend.statistics', [
            'socialTables'      => $social,
            'economyTables'     => $economy,
            'agricultureTables' => $agriculture,
        ]);
    }
}
