<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "hello world";
});
Route::view('/', 'welcome');

Route::get('/about', function () {
    return view('about');
});