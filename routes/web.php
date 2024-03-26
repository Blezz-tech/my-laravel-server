<?php

use App\Models\City;
use App\Models\Post;
use App\Models\Review;
use App\Models\Rubric;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
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

// Route::get("/", 'HomeController@index')->name('home');
// Route::get('/main', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/', function () {
//     $photos = DB::select('select * from photos');
// });
//     return view('home', ['title'=>'Главная','photos'=> $photos]);
// })->name('home');

Route::get('/', function () {
    $photos = DB::select('select * from photos');
    return view('home', ['title' => 'Главная', 'photos' => $photos]);
})->name('home');

Route::get('/users', function () {
    return view('users.create');
});



Route::get('/about', function () {
    return view('about', ['title' => 'О нас']);
})->name('about');


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-contact', function () {
    return view('send-contact');
});

// Route::redirect('/about', '/');

Route::get('/main', [HomeController::class, 'index'])->name('home'); // сессия

Route::resource('/photos', PhotoController::class);

// users
Route::resource('/users', UserController::class);


Route::fallback(function () {
    return "Запрашиваемой страницы нет, перейдите на главную";
});

Route::get('/login', [UserController::class, 'loginform'])->name('loginform');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::fallback(function () {
    abort(404, "Жаль, но страница не найдена...");
});
Route::get('/login', [UserController::class, 'loginform'])->name('loginform');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('testpost/{id}', function ($id) {
    $data = Review::find($id)->post;
    dd($data);

    // $data = Post::find($id)->rubric();
    // dd($data);
})->name('testpost');

Route::get('/testcountry', function (Request $request) {
    $country_text = $request->country_text;

    $data = [];

    $country = Country::select('Name', 'Continent', 'SurfaceArea');

    if (is_null($country_text) || $country == "") {
        $data = $country->get();
    } else {
        $data = $country->where('Name', 'like', $country_text . '%')->get();
    }



    return view('testcountry', ['title' => 'Страны', 'countries' => $data]);
})->name('testcountry');

Route::get('testcountry/{id}', function ($id) {
    $data = Country::find($id);
    dd($data);

})->name('testcountry');

Route::get('/testcity/{id}', function ($id) {
    $data = City::find($id)->country;
    dd($data);

})->name('testcity');
