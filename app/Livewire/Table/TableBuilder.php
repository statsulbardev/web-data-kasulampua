<?php

declare(strict_types=1);

namespace App\Livewire\Table;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class TableBuilder extends Component
{
    use WithFileUploads;

    #[Validate('required', onUpdate: false, message: 'Kategori harus terisi')]
    public string $kategori;

    #[Validate('required', onUpdate: false, message: 'File harus ada')]
    #[Validate('mimes:xls,xlsx', onUpdate: false, message: 'File harus bertipe excel')]
    public $file;

    #[Title('Tambah Tabel Data')]
    public function render()
    {
        return view('livewire.table.table-builder');
    }

    public function submit()
    {
        $fileName = $this->file->getClientOriginalName();

        $this->file->storeAs("/data/" . $this->kategori, $fileName, 'public');

        $this->dispatch('notification', message: 'File telah diunggah');

        return $this->redirectRoute('backend.statistic.index', navigate: true);
    }
}
