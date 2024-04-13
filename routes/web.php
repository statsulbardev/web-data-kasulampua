<?php
// Frontend Laravel
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\GlosariumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfographicController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;

// Backend Livewire
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Indicator\IndicatorBuilder;
use App\Livewire\Indicator\IndicatorList;
use App\Livewire\Infographic\InfographicBuilder;
use App\Livewire\Infographic\InfographicList;
use App\Livewire\News\NewsBuilder;
use App\Livewire\News\NewsList;
use App\Livewire\Publication\PublicationBuilder;
use App\Livewire\Publication\PublicationList;
use App\Livewire\Table\TableBuilder;
use App\Livewire\Table\TableList;
use App\Livewire\User\UserList;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware('guest')->group(function() {
    Route::get('/login', Login::class)->name('login');
});

// Frontend Laravel
Route::name('frontend.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.details');
    Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic.index');
    Route::get('/statistic/{category}/{value}', [StatisticController::class, 'show'])->name('statistic.show');
    Route::get('/publication', [PublicationController::class, 'index'])->name('publication.index');
    Route::get('/infografis', [InfographicController::class, 'index'])->name('infographic.index');
    Route::get('/tentang', fn() => view('frontend.about'))->name('about.index');
    Route::get('/glosarium', fn() => view('frontend.glosarium'))->name('glosarium.index');
    Route::get('/sitemap', fn() => view('frontend.sitemap'))->name('sitemap.index');
});

// Backend Livewire
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::name('backend.')->prefix('backend')->group(function () {
        Route::get('/news', NewsList::class)->name('news.index');
        Route::get('/news/create', NewsBuilder::class)->name('news.create');
        Route::get('/news/edit/{news}', NewsBuilder::class)->name('news.edit');

        Route::get('/indicator', IndicatorList::class)->name('indicator.index');
        Route::get('/indicator/create', IndicatorBuilder::class)->name('indicator.create');
        Route::get('/indicator/edit/{indicator}', IndicatorBuilder::class)->name('indicator.edit');

        Route::get('/statistic', TableList::class)->name('statistic.index');
        Route::get('/statistic/create', TableBuilder::class)->name('statistic.create');

        Route::get('/publication', PublicationList::class)->name('publication.index');
        Route::get('/publication/create', PublicationBuilder::class)->name('publication.create');
        Route::get('/publication/edit/{publication}', PublicationBuilder::class)->name('publication.edit');

        Route::get('/infographic', InfographicList::class)->name('infographic.index');
        Route::get('/infographic/create', InfographicBuilder::class)->name('infographic.create');

        Route::get('/user', UserList::class)->name('user.index');
    });
});
