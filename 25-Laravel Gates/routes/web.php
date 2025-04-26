<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;




Route::get('/', [TestController::class, 'index'])->name('login');
Route::get('/register', [TestController::class, 'register'])->name('register');
Route::post('/registerSave', [TestController::class, 'registerSave'])->name('registerSave');
Route::post('/loginSave', [TestController::class, 'login'])->name('loginSave');
// Route::get('/dashboard', [TestController::class, 'dashboardPage'])->name('dashboard')->middleware('can:isAdmin');
Route::get('/dashboard', [TestController::class, 'dashboardPage'])->name('dashboard')->can('isAdmin');
Route::get('/logout', [TestController::class, 'logout'])->name('logout');
Route::get('/profile/{id}', [TestController::class, 'profile'])->name('profile');
Route::get('/post/{id}', [TestController::class, 'post'])->name('post');
Route::get('/updatePost/{id}', [TestController::class, 'updatePost'])->name('update.post');
