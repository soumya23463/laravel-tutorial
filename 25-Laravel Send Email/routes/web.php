<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


Route::get('/', [EmailController::class, 'index'])->name('email.index');
