<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\StatisticController as BackendStatisticController;
use App\Http\Controllers\Frontend\GlosariumController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InfographicController;
use App\Http\Controllers\Frontend\PublicationController;
use App\Http\Controllers\Frontend\StatisticController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/berita', [NewsController::class, 'newsList'])->name('frontend.news');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.details');

Route::get('/tabel/{category}/{value}', [HomeController::class, 'show'])->name('frontend.show');
Route::get('/tabel-indikator', [StatisticController::class, 'index'])->name('frontend.statistic');
Route::get('/publikasi', [PublicationController::class, 'index'])->name('frontend.publication');
Route::get('/infografis', [InfographicController::class, 'index'])->name('frontend.infographic');
Route::get('/tentang', fn() => view('frontend.about'))->name('frontend.about');
Route::get('/glosarium', [GlosariumController::class, 'index'])->name('frontend.glosarium');
Route::get('/sitemap', fn() => view('frontend.sitemap'))->name('frontend.sitemap');

 Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('auth.login');
 Route::post('/login', [AuthenticatedSessionController::class, 'store']);

 Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

    Route::prefix('backend')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/news/list', [NewsController::class, 'index'])->name('news.list');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news/create',[NewsController::class, 'store'])->name('news.store');
        Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/edit/{id}', [NewsController::class, 'update'])->name('news.update');

        Route::get('/statistik', [BackendStatisticController::class, 'index'])->name('statistics.list');
        Route::get('/statistik/create', [BackendStatisticController::class, 'create'])->name('statistics.create');
        Route::post('/statistik/create', [BackendStatisticController::class, 'store'])->name('statistics.store');
        Route::post('/statistik', [BackendStatisticController::class, 'destroy'])->name('statistics.delete');
    });
});
