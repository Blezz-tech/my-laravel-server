<?php

use Illuminate\Support\Facades\DB;
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

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/main', [HomeController::class, 'index'])->name('home');

// Route::redirect('/about', '/');

Route::get('/', function () {
    $photos = DB::select('select * from photos');
    return view('home', ['title' => 'Главная', 'photos' => $photos]);
})->name('home');



Route::get('/about', function () {
    return view('about', ['title' => 'О нас']);
})->name('about');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/sendcontact', function () {
    return view('sendcontact');
});

Route::resource('/photos', PhotoController::class);

Route::fallback(function () {
    return "Запрашиваемой страницы нет, перейдите <a href=" . route('home') . ">на главную</a>";
});



