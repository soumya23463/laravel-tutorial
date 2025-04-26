<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


// Route::get('/', [EmailController::class, 'index'])->name('email.index');

Route::get('/contact', [EmailController::class, 'contact'])->name('email.contact');


Route::post('/sendAttachment', [EmailController::class, 'sendAttachment'])->name('send.attachment');