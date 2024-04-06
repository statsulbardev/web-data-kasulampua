<?php

declare(strict_types=1);

namespace App\Livewire\Infographic;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class InfographicBuilder extends Component
{
    use WithFileUploads;

    #[Validate('required', onUpdate: false, message: 'File infografis harus terisi')]
    #[Validate('mimes:jpg,png', onUpdate: false, message: 'File hanya boleh berekstensi jpg atau png')]
    public $infographic;

    #[Title('Infografis Baru')]
    public function render(): View
    {
        return view('livewire.infographic.infographic-builder');
    }

    public function submit()
    {
        $this->validate();

        $fileName = $this->infographic->getClientOriginalName();

        $this->infographic->storeAs("/infographic", $fileName, 'public');

        $this->dispatch('notification', message: 'Infografis telah diunggah');

        return $this->redirectRoute('backend.infographic.index', navigate: true);
    }
}
