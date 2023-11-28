<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     $sum = 2 + 3;
//     $name = "Kate";
//     return view('home', ['num' => $sum, 'str' => $name]);
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', 'HomeController@index')->name('index');


Route::get('/main', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/send-contact', function() {
    return view('send-contact');
});

Route::redirect('/about', '/');

Route::resource('/photos', PhotoController::class);

Route::fallback(function () {
    return "Запрашиваемой страницы нет. Перейдите на главную <br> <a href=". route('home') . ">На главную</a>";
});
