<?php

declare(strict_types=1);

namespace App\Livewire\Publication;

use App\Livewire\Forms\PublicationForm;
use App\Models\Publication;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class PublicationBuilder extends Component
{
    use WithFileUploads;

    public PublicationForm $form;

    public Publication $publication;

    public string $routeName;

    public string $pageTitle;

    public function mount(Publication $publication)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'backend.publication.edit') {
            $this->publication   = $publication;
            $this->form->title   = $publication->title;
            $this->form->picture = $publication->picture;
            $this->form->url     = $publication->url;
            $this->pageTitle = "Edit Publikasi ";
        } else {
            $this->pageTitle = "Publikasi Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.publication.publication-builder')->title($this->pageTitle);
    }

    public function submit()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'backend.publication.create'
                ? $this->form->save()
                : $this->form->update($this->publication);

        $this->dispatch('notiification', message: $result);

        return $this->redirectRoute('backend.publication.index', navigate: true);
    }
}
