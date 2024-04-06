<?php

declare(strict_types=1);

namespace App\Livewire\News;

use App\Livewire\Forms\NewsForm;
use App\Models\News;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsBuilder extends Component
{
    use WithFileUploads;

    public NewsForm $form;

    public News $news;

    public string $pageTitle;

    public string $routeName;

    public $image;

    public function mount(News $news)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'backend.news.edit') {
            $this->news              = $news;
            $this->form->title       = $news->title;
            $this->form->picture     = $news->picture;
            $this->form->description = $news->description;
            $this->pageTitle = "Edit Berita";
        } else {
            $this->pageTitle = "Berita Baru";
        }
    }

    public function render(): View
    {
        return view('livewire.news.news-builder')->title($this->pageTitle);
    }

    public function submit()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'backend.news.create'
                ? $this->form->save($this->image)
                : $this->form->update($this->news, $this->image);

        $this->dispatch('notification', message: $result);

        return $this->redirectRoute('backend.news.index', navigate: true);
    }
}
