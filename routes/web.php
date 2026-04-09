<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/pole-1', [PageController::class, 'poleOne'])->name('pole-1');
Route::get('/pole-2', [PageController::class, 'poleTwo'])->name('pole-2');
Route::get('/processus', [PageController::class, 'process'])->name('processus');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio.index');
Route::get('/mon-espace-just', [PageController::class, 'monEspaceJust'])->name('mon-espace-just');
Route::get('/mentions-legales', [PageController::class, 'mentionsLegales'])->name('mentions-legales');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:contact')
    ->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';