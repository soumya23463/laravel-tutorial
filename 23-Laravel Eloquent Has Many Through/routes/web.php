<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CountryController::class, 'index'])->name('home');


Route::get('/user', [UserController::class, 'index'])->name('user');