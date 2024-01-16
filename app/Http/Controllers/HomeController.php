<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $requset)
    {

        // DB::insert('insert into catalog_photo (name) values (?)', ['Cars']);

        // DB::update('update catalog_photo set name = ? where id = ?', ['Цветочки', 3]);

        //    $photos = DB::select("select * from catalog_photo where name=?", ['Cars']);

        // DB::delete('delete from catalog_photo where id = ?', ['3']);


        // DB::statement('RENAME TABLE photossss TO photos');
        // $photos = DB::select("select * from photos");

        // dd($photos);
        // return $photos;

        dump($requset->session()->all());

    }
}
