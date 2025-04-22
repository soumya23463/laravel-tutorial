<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "hello world";
});
Route::view('/', 'welcome');

// Route::get('/about/{id?}', function (string $id=null) {
//     return view('about');
// })->name('about');


Route::prefix('page')->group(function () {
    Route::get('/about', function () {
        return "about";
    })->name('about');
    Route::get('/contact', function () {
        return "contact";
    })->name('contact');
    Route::get('/services', function () {
        return "services";
    })->name('services');

});


Route::fallback(function () {
    return "404";
});
