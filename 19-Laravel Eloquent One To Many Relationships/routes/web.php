<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/putcontact', [StudentController::class, 'create'])->name('putcontact');
// Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');