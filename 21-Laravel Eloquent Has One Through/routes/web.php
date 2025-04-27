<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;

Route::get('/', [UserController::class, 'index'])->name('home');