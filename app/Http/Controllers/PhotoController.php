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
        $validated = $request -> validate([
            'name' => 'required|unique:photos|min:3|max:25',
            'description' => 'required|max:255',
            'path' => 'required|regex:/^img\/[a-z]{1,}\.png$/i',

        ]);

        DB::insert('insert into photos (name, description, path) values (?, ?, ?)', [$request->name, $request->description, $request->path]);
        // dd($request);
        // return view('photos.accomplished', ['name' => $request->name, 'path' => $request->path]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $photo = DB::select('select * from photos where id = ?', [$id])[0];
        return view('photos.show', ['id' => $id, 'name' => $photo->name, 'path' => $photo->path]);
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
        DB::update('update photos set name = ?, path = ? where id = ?', [$request->name, $request->path, $id]);
        return view('photos.updated', ['name' => $request->name, 'path' => $request->path]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::delete('delete from photos where id = ?', [$id]);
        return view('photos.deleted', ['id' => $id]);
    }
}
