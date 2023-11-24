<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sum = 2 + 12;
        $name = "Kate";
        return view('home', ['num' => $sum, 'str' => $name]);
    }
}
