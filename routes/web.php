<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');

Route::prefix('/news')->name('news.')->group(function () {
    Route::get('', [NewsController::class, 'index'])->name('index');
    Route::get('{news}', [NewsController::class, 'detail'])->name('detail');
});

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
