<?php

declare(strict_types=1);

namespace App\Livewire\News;

use App\Livewire\Forms\NewsForm;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class NewsList extends Component
{
    public NewsForm $form;

    public $newsId;

    #[Title('Berita Kasulampua')]
    public function render(): View
    {
        $news = News::get();

        return view('livewire.news.news-list', ['news' => $news]);
    }

    public function delete()
    {
        $news = News::findOrFail($this->newsId);

        $message = $this->form->destroy($news);

        $this->dispatch('notification', message: $message);
    }
}
