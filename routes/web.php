<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\UserAccessController;
use App\Http\Controllers\Admin\BlogCategoryController as AdminBlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\ContactLeadController;
use App\Http\Controllers\Admin\PortfolioProjectController as AdminPortfolioProjectController;
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
Route::get('/jag-gateway', function () {
    if (auth()->check()) {
        return auth()->user()->isAdmin() || auth()->user()->isEditeur()
            ? redirect()->route('admin.dashboard')
            : redirect()->route('dashboard');
    }

    return view('auth.login', ['gateway' => 'admin']);
})->name('admin.gateway');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:contact')
    ->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});

Route::middleware(['auth', 'verified', 'role:admin,editeur'])->prefix('jag-gateway')->name('admin.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('articles', AdminBlogPostController::class)->except('show')->parameters([
        'articles' => 'post',
    ])->names('blog');
    Route::resource('categories', AdminBlogCategoryController::class)->except('show')->parameters([
        'categories' => 'category',
    ])->names('categories');
    Route::resource('realisations', AdminPortfolioProjectController::class)->except('show')->parameters([
        'realisations' => 'portfolio',
    ])->names('portfolio');
});

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('jag-gateway')->name('admin.')->group(function () {
    Route::get('/access', [UserAccessController::class, 'index'])->name('access.index');
    Route::get('/access/create', [UserAccessController::class, 'create'])->name('access.create');
    Route::post('/access', [UserAccessController::class, 'store'])->name('access.store');
    Route::get('/demandes', [ContactLeadController::class, 'index'])->name('leads.index');
    Route::get('/demandes/{lead}', [ContactLeadController::class, 'show'])->name('leads.show');
    Route::post('/demandes/{lead}/approve', [ContactLeadController::class, 'approve'])->name('leads.approve');
    Route::post('/demandes/{lead}/archive', [ContactLeadController::class, 'archive'])->name('leads.archive');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
