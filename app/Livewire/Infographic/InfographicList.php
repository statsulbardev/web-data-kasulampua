<?php

declare(strict_types=1);

namespace App\Livewire\Infographic;

use App\Trait\InfographicTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Title;
use Livewire\Component;

class InfographicList extends Component
{
    use InfographicTrait;

    public $infographicName;

    #[Title('Daftar Infografis')]
    public function render(): View
    {
        return view('livewire.infographic.infographic-list', ['infographics' => $this->getInfographic()]);
    }


    public function delete()
    {
        File::delete(storage_path('app/public/infographic/' . $this->infographicName));

        $this->dispatch('notification', message: 'Infografis telah dihapus');
    }
}
