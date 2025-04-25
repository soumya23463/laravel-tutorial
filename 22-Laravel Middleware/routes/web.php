<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\TestUser;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::post('/registerSave', [UserController::class, 'store'])->name('registerSave');
Route::post('/loginSave', [UserController::class, 'login'])->name('loginSave');
// Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->middleware(ValidUser::class)->middleware(TestUser::class);
// Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->middleware(['isUserValid:admin,reder',TestUser::class]);

Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->middleware(["auth","isUserValid:admin"]);
//  Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->middleware(['isUserValid',TestUser::class]);
// Route::middleware(['isUserValid', TestUser::class])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
// });

// Route::middleware(['isUserValid', TestUser::class])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->withoutMiddleware(TestUser::class);
// });

// Route::withoutMiddleware([ TestUser::class])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
// });

// Route::withoutMiddleware([ TestUser::class])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
// });
// Route::middleware(['ok-user'])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
// });
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/inner', [UserController::class, 'inner'])->name('inner');