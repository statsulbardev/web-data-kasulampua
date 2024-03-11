<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\GlosariumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfographicController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('auth.login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Frontend
Route::name('frontend.')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/news', [NewsController::class, 'frontIndex'])->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'frontShow'])->name('news.details');

    Route::get('/statistic', [StatisticController::class, 'frontIndex'])->name('statistic.index');
    Route::get('/statistic/{category}/{value}', [StatisticController::class, 'frontShow'])->name('statistic.show');

    Route::get('/publication', [PublicationController::class, 'frontIndex'])->name('publication.index');
    Route::get('/infografis', [InfographicController::class, 'frontIndex'])->name('infographic.index');
    Route::get('/tentang', fn() => view('frontend.about'))->name('about.index');
    Route::get('/glosarium', [GlosariumController::class, 'index'])->name('glosarium.index');
    Route::get('/sitemap', fn() => view('frontend.sitemap'))->name('sitemap.index');
});

// Backend
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

    Route::name('backend.')->prefix('backend')->group(function () {
        Route::get('/news', [NewsController::class, 'backIndex'])->name('news.index');
        Route::get('/news/create', [NewsController::class, 'backCreate'])->name('news.create');
        Route::post('/news/create',[NewsController::class, 'backStore'])->name('news.store');
        Route::get('/news/edit/{id}', [NewsController::class, 'backEdit'])->name('news.edit');
        Route::put('/news/edit/{id}', [NewsController::class, 'backUpdate'])->name('news.update');
        Route::post('/news', [NewsController::class, 'backDestroy'])->name('news.delete');

        Route::get('/statistic', [StatisticController::class, 'backIndex'])->name('statistic.index');
        Route::get('/statistic/create', [StatisticController::class, 'backCreate'])->name('statistic.create');
        Route::post('/statistic/create', [StatisticController::class, 'backStore'])->name('statistic.store');
        Route::post('/statistic', [StatisticController::class, 'backDestroy'])->name('statistic.delete');

        Route::get('/publication', [PublicationController::class, 'backIndex'])->name('publication.index');
        Route::get('/publication/create', [PublicationController::class, 'backCreate'])->name('publication.create');
        Route::post('/publication/create', [PublicationController::class, 'backStore'])->name('publication.store');
        Route::get('/publication/edit/{id}', [PublicationController::class, 'backEdit'])->name('publication.edit');
        Route::put('/publication/edit/{id}', [PublicationController::class, 'backUpdate'])->name('publication.update');
        Route::post('/publication', [PublicationController::class, 'backDestroy'])->name('publication.delete');

        Route::get('/infographic', [InfographicController::class, 'backIndex'])->name('infographic.index');
        Route::get('/infographic/create', [InfographicController::class, 'backCreate'])->name('infographic.create');
        Route::post('infographic/create', [InfographicController::class, 'backStore'])->name('infographic.store');
        Route::post('/infographic', [InfographicController::class, 'backDestroy'])->name('infographic.delete');

        Route::get('/user', [UserController::class, 'index'])->name('user.index');
    });
});
