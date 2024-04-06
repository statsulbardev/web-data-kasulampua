<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\News;
use App\Models\Publication;
use App\Trait\InfographicTrait;
use App\Trait\TableTrait;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    use InfographicTrait, TableTrait;

    #[Title('Dashboard')]
    public function render(): View
    {
        $tabelSosDuk  = $this->getTable('sosial');
        $tabelEkoBank = $this->getTable('ekonomi');
        $tabelPertInd = $this->getTable('pertanian');
        $publikasi    = Publication::count();
        $infografis   = $this->getInfographic();
        $berita       = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('livewire.dashboard', [
            'tabelSosDuk'  => count($tabelSosDuk),
            'tabelEkoBank' => count($tabelEkoBank),
            'tabelPertInd' => count($tabelPertInd),
            'publikasi'    => $publikasi,
            'infografis'   => count($infografis),
            'berita'       => $berita
        ]);
    }
}
