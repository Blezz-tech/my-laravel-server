<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = DB::select('SELECT * FROM photos');
        return view('photos.index', ['photos' => $photos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        DB::insert('insert into photos (name) values (?)', [$request->name]);
        return "Сохранены данные о фотографии $request->name";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $photos = DB::select('select * from photos where id = ?', [$id]);
        return "Название фотографии с номером $id " . $photos[0]->name;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('photos.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::update('update photos set name = ? where id = ?', [$request->name, $id]);
        return "Изменены данные о фото с номером $id Новое имя фото: $request->name";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::delete('delete from photos where id = ?', [$id]);
        return "Данная фотография удалена $id";
    }
}
