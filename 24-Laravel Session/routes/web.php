<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


// Route::get('/', function () {
// //     $value=session()->all();

// //    echo "<pre>";
// //     print_r($value);
// //     echo "</pre>";

//     // $value=session()->get('name');
//     // echo $value;
//     $value=session('name');
//     echo $value;
// });
// Route::get('/set', function () {
//     session(['name' => 'John Doe']);
//     return 'Session value set';
// });
Route::get('/set', [TestController::class, 'setSession']);
Route::get('/get', [TestController::class, 'getSession']);
Route::get('/destroy', [TestController::class, 'destroySession']);
Route::get('/index', [TestController::class, 'index']);
