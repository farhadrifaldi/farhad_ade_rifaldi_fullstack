<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticleController::class, 'show'])->name('article.show');
        Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
        Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::post('/insert', [ArticleController::class, 'insert'])->name('article.insert');
        Route::post('/update/{id}', [ArticleController::class, 'update'])->name('article.update');
        Route::delete('/delete', [ArticleController::class, 'delete'])->name('article.delete');
    });
});

require __DIR__ . '/auth.php';
