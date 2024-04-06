<?php

declare(strict_types=1);

namespace App\Livewire\Table;

use App\Trait\TableTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Title;
use Livewire\Component;
use SplFileInfo;

class TableList extends Component
{
    use TableTrait;

    public array $tablePath;

    #[Title('Daftar Tabel Data')]
    public function render(): View
    {
        $public = storage_path('app/public/data/');

        $socialFiles      = File::allFiles($public . 'sosial');
        $economyFiles     = File::allFiles($public . 'ekonomi');
        $agricultureFiles = File::allFiles($public . 'pertanian');

        return view('livewire.table.table-list', [
            'socialFiles'      => $socialFiles,
            'economyFiles'     => $economyFiles,
            'agricultureFiles' => $agricultureFiles
        ]);
    }

    public function delete()
    {
        $category = explode("/", $this->tablePath[0])[3];

        $fileName = $this->tablePath[1];

        File::delete(storage_path('app/public/data/' . $category . '/' . $fileName));

        $this->dispatch('notification', message: 'File telah dihapus');

        return $this->redirectRoute('backend.statistic.index', navigate: true);
    }
}
