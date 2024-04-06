<?php

declare(strict_types=1);

namespace App\Livewire\Indicator;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class IndicatorList extends Component
{
    #[Title('Indikator Strategis')]
    public function render(): View
    {
        return view('livewire.indicator.indicator-list');
    }
}
