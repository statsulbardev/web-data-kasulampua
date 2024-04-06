<?php

declare(strict_types=1);

namespace App\Livewire\Publication;

use App\Livewire\Forms\PublicationForm;
use App\Models\Publication;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class PublicationList extends Component
{
    public PublicationForm $form;

    public $publicationId;

    #[Title('Daftar Publikasi')]
    public function render(): View
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();

        return view('livewire.publication.publication-list', ['publications' => $publications]);
    }

    public function delete()
    {
        $publication = Publication::findOrFail($this->publicationId);

        $message = $this->form->destroy($publication);

        $this->dispatch('notification', message: $message);
    }
}
