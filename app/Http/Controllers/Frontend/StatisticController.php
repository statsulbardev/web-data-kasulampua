<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Trait\TableTrait;

class StatisticController extends Controller
{
    use TableTrait;

    public function index()
    {
        $social      = $this->getTable('sosial');
        $economy     = $this->getTable('ekonomi');
        $agriculture = $this->getTable('pertanian');

        return view('frontend.statistics', [
            'socialTables'      => $social,
            'economyTables'     => $economy,
            'agricultureTables' => $agriculture,
        ]);
    }
}
