<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/role', [RolesController::class, 'index'])->name('role');
 Route::get('/putroles', [UserController::class, 'create'])->name('putroles');
 Route::get('/putusers', [RolesController::class, 'create'])->name('putusers');
// Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');
