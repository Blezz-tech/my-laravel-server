<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('<h1>hello, world!</h1>');
// });

Route::get('/', function () {
    $sum = 2 + 3;
    $name = "Kate";
    return view('home', ['num' => $sum, 'str' => $name]);
});

// Route::get('/about', function () {
//     return view('about');
// });
