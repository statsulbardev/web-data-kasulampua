<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Publication;
use App\Trait\InfographicTrait;
use App\Trait\TableTrait;

class DashboardController extends Controller
{
    use InfographicTrait, TableTrait;

    public function index()
    {
        $tabelSosDuk  = $this->getTable('sosial');
        $tabelEkoBank = $this->getTable('ekonomi');
        $tabelPertInd = $this->getTable('pertanian');
        $publikasi    = Publication::count();
        $infografis   = $this->getInfographic();
        $berita       = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('backend.dashboard', [
            'tabelSosDuk'  => count($tabelSosDuk),
            'tabelEkoBank' => count($tabelEkoBank),
            'tabelPertInd' => count($tabelPertInd),
            'publikasi'    => $publikasi,
            'infografis'   => count($infografis),
            'berita'       => $berita
        ]);
    }
}
