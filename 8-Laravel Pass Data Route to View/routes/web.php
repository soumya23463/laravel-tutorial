<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $title = 'Welcome to My Website';
//     return view('welcome', [
//         'title' =>  $title,
//         'description' => 'This is a sample description for the home page.',
//         'keywords' => 'home, welcome, sample',
//         // 'script' => '<script>alert("Welcome to the home page!");</script>',
//     ]);
// })->name('home');


// Route::get('/', function () {
//     $title = 'Welcome to My Website';
//     return view('welcome' )->with('title',$title);
// })->name('home');


// Route::get('/', function () {
//     $title = 'Welcome to My Website';
//     return view('welcome' )->withTitle($title);
// })->name('home');


// Route::get('/', function () {
//    $users = [
//         1=>[
//             'name' => 'John',
//             'email' => 'john@example.com',
//             'age' => 30
//         ],
//         2=>[
//             'name' => 'Alice',
//             'email' => 'alice@example.com',
//             'age' => 25
//         ],
//         3=>[
//             'name' => 'Bob',
//             'email' => 'bob@example.com',
//             'age' => 28
//         ]
//     ];
//     return view('welcome' )->withUser($users);
// })->name('home');


Route::get('/', function () {
    $users =[
        1 => [
            'name' => 'John',
            'email' => 'john@example.com',
            'age' => 30
        ],
        2 => [
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'age' => 25
        ],
        3 => [
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'age' => 28
        ]
    ];
    return view('welcome')->withUser($users);
})->name('home');

Route::get('/user/{id}', function ($id) {
    $users = [
        1 => [
            'name' => 'John',
            'email' => 'john@example.com',
            'age' => 30
        ],
        2 => [
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'age' => 25
        ],
        3 => [
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'age' => 28
        ]
    ];
    $user = $users[$id] ?? null;
    abort_if(!$user, 404, 'User not found');
    return view('user', [
        'id' => $user
    ]);
})->name('view.user');
