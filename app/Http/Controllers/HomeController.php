<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatalogPhoto;

class HomeController extends Controller
{
    public function index() {
        $sum = 2 + 12;
        $name = "Kate";
        // $photos = CatalogPhoto::all();

        // $catalogPhoto = new CatalogPhoto;
        // $catalogPhoto->name = "test1";
        // $catalogPhoto->save();

        $photos = CatalogPhoto::where('name', 'test')->get();

        return view('home', ['num' => $sum, 'str' => $name, 'photos' => $photos]);
    }
}
