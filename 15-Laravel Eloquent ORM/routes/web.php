<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/user/{id}', [PageController::class, 'index'])->name('user');


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/user/{id}', 'index')->name('user');
});
Route::get('/test',PageController::class)->name('test');