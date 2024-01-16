<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        // DB::insert('insert into catalog_photo (name) values (?)', ['Cars']);

        // DB::update('update catalog_photo set name = ? where id = ?', ['Цветочки', 3]);

        //    $photos = DB::select("select * from catalog_photo where name=?", ['Cars']);

        // DB::delete('delete from catalog_photo where id = ?', ['3']);

        // DB::statement('RENAME TABLE photossss TO photos');
        // $photos = DB::select("select * from photos");

        // dd($photos);
        // return $photos;

        dump($request->session()->all());
        $request->session()->put('test', 'test value');
        $request->session()->put('cart', [
            ['id' => 1, 'product' => 'Coca cola'],
            ['id' => 2, 'product' => 'Burger'],
        ]);

        $value1 = $request->session()->get('test');
        dump($value1);

        $value2 = $request->session()->get('cart');
        dump($value2);

        $value3 = $request->session()->get('cart')[0]['product'];
        dump($value3);

        $request->session()->push('cart', ['id' => 3, 'product' => 'Chips']);

        $value2 = $request->session()->get('cart');
        dump($value2);

        //$value4 = $request->session()->pull('test');

        $request->session()->forget('test');
        dump($request->session()->all());

        // 1. записать по заданному ключу значение по умолчанию

        $key = "key";
        $value5 = session($key, 'default');
        dump($value5);

        // 2. определить, имеется ли значение в сессии

        $request->session()->put('key', 'value');

        if ($request->session()->has($key)) {
            echo ("Значение ключа " . $key . " равно " . $request->session()->get('key', $key));
        } else {
            echo ("Ключа " . $key . " не существует");
        }

        // 3. увеличить и уменьшить значение, находящееся в сессии на 1

        if (!$request->session()->has('number')) {
            $request->session()->put('number', 1);
        }

        $request->session()->increment('number');
        dump($request->session()->get('number'));

        // $request->session()->decrement('number');
        // dump($request->session()->get('number'));

        // 4. увеличить и уменьшить значение, находящееся в сессии на заданное число

        $step = 6;
        if (!$request->session()->has('count')) {
            $request->session()->put('count', 1);
        }

        $request->session()->increment('number', $incrementBy = $step);
        dump($request->session()->get('number'));

        // $request->session()->decrement('count', $incrementBy = $step);
        // dump($request->session()->get('count'));

        // 5. сохранить элементы в сессии только для следующего запроса.

        // $request->session()->flash('flash', "Ключ flash существует");

        dump($request->session()->get('flash'));
    }
}
