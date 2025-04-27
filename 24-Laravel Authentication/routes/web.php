<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/registerSave', [UserController::class, 'store'])->name('registerSave');
Route::post('/loginSave', [UserController::class, 'login'])->name('loginSave');
Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/inner', [UserController::class, 'inner'])->name('inner');
