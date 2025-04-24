<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/putcontact', [StudentController::class, 'create'])->name('putcontact');
// Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');
