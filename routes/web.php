<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Authors;
use App\Http\Controllers\Books;
use App\Http\Controllers\Publisheres;
use App\Http\Controllers\advance_Search;

// _______________________________________________

Route::resource('books', Books::class);
Route::get('books/pdf/{id}', [Books::class, 'pdf']);
Route::resource('publishers', Publisheres::class);
Route::get('/advance_Search', [advance_Search::class, 'search']);
Route::get('/advance_Search/show_search', [advance_Search::class, 'show']);

Route::get('/', [Books::class, 'index'])->name('books.index');
Route::get('/header', function () {
    return view('header');
});
// ______________________________________________
Route::get('/index', function () {
    return view('index'); 
});
// _______________________________________________
Route::resource('Categories', Categories::class);
// _______________________________________________
Route::resource('authors', Authors::class);

// _______________________________________________

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
