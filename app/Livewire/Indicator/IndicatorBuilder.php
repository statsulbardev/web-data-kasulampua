<?php

declare(strict_types=1);

namespace App\Livewire\Indicator;

use App\Livewire\Forms\IndicatorForm;
use App\Models\Indicators;
use App\Models\Region;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Component;

class IndicatorBuilder extends Component
{
    public $tahun;

    public $indikator;

    public $data = [];

    public $keterangan;

    public string $pageTitle;

    public string $routeName;

    #[Computed]
    public function provinces()
    {
        return Region::where('keterangan', 'provinsi')->get();
    }
    #[Computed]
    public function islands()
    {
        return Region::where('keterangan', 'pulau')->get();
    }

    public function mount()
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'backend.indicator.edit') {
            $this->pageTitle = "Edit Indikator";
        } else {
            $this->pageTitle = "Indikator Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.indicator.indicator-builder')->title($this->pageTitle);
    }

    public function submit()
    {
        // flatten data
        $temp = [];
        foreach($this->data as $data) {
            $temp[] = [
                'tahun' => $this->tahun,
                'indikator' => $this->indikator,
                'kode_wilayah' =>strval(array_keys($data)[0]),
                'data' => floatval(array_values($data)[0]),
                'keterangan' => $this->keterangan ?? null
            ];
        }

        // bulk insert with timestamps
        $time = now();
        $indicators = array_map(function ($indicator) use ($time) {
            return $indicator + ['created_at' => $time, 'updated_at' => $time];
        }, $temp);

        Indicators::insert($indicators);

        $this->reset(['tahun', 'indikator', 'data', 'keterangan']);
    }
}
