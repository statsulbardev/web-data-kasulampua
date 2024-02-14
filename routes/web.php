<?php

use App\Http\Controllers\Frontend\GlosariumController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InfographicController;
use App\Http\Controllers\Frontend\PublicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/tabel/{category}/{value}', [HomeController::class, 'show'])->name('frontend.show');

Route::get('/publikasi', [PublicationController::class, 'index'])->name('frontend.publication');

Route::get('/infografis', [InfographicController::class, 'index'])->name('frontend.infographic');

Route::get('/tentang', fn() => view('frontend.about'))->name('frontend.about');

Route::get('/glosarium', [GlosariumController::class, 'index'])->name('frontend.glosarium');

Route::get('/sitemap', fn() => view('frontend.sitemap'))->name('frontend.sitemap');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
