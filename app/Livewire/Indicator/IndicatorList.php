<?php

declare(strict_types=1);

namespace App\Livewire\Indicator;

use App\Models\Indicators;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class IndicatorList extends Component
{
    public $tahun;

    public $indikator;
    public array $judul = [
        'ipm' => 'Indeks Pembangunan Manusia',
        'kemiskinan' => 'Kemiskinan',
        'pdrb' => 'Kontribusi PDRB',
        'ekonomi' => 'Pertumbuhan Ekonomi'
    ];

    #[Title('Indikator Strategis')]
    public function render(): View
    {
        $this->tahun = date("Y");

        $this->indikator = "ipm";

        $data = Indicators::where('tahun', $this->tahun)->where('indikator', $this->indikator)->get();

        return view('livewire.indicator.indicator-list', [
            'data' => $data
        ]);
    }
}
