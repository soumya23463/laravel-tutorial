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
//     return "hello world $id";
// });

// Route::get('/about/{id?}/comment/{commentId?}', function (string $id=null,string $commentId=null) {
//     return "hello world $id $commentId";
// })->where(['id' => '[0-9]+', 'commentId' => '[0-9]+'])->name('about');

// Route::get('/about/{id?}/comment/{commentId?}', function (string $id=null,string $commentId=null) {
//     return "hello world $id $commentId";
// })->whereNumber('id')->whereNumber('commentId')
//     ->name('about');


// Route::get('/about/{id?}/comment/{commentId?}', function (string $id=null,string $commentId=null) {
//     return "hello world $id $commentId";
// })->whereAlphaNumeric('id')->whereAlphaNumeric('commentId')
//     ->name('about');


    // Route::get('/about/{id?}/comment/{commentId?}', function (string $id=null,string $commentId=null) {
    //     return "hello world $id $commentId";
    // })->whereIn('id',['movie','song'])->whereIn('commentId',['movie','song'])->name('about');



    Route::get('/about/{id?}/comment/{commentId?}', function (string $id=null,string $commentId=null) {
        return "hello world $id $commentId";
    })->where('id','[a-zA-Z]+')->where('commentId','[a-zA-Z]+')->name('about');