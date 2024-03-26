<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('users.create');
    }



    public function create()
    {
        return view('users.create');
    }




    public function store(Request $request)
    {

        // dd($request->all());

        //Валидация
        $validated = $request->validate([
            "name" => "required|max:25",
            "email" => 'required|unique:users',
            "password" => 'required|confirmed|min:3|max:25'
        ]);

        // Запись в таблицу users
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        DB::insert(
            'insert into users (name, email, password) values (?, ?, ?)',
            [$name, $email, $password]);

            return redirect()->intended('/successfully');

    }

    public function loginform(){
        return view('users.loginform');

    }

    public function login(Request $request){

        $credentails = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentails)) {
             $request->session()->regenerate();

        return redirect()->intended('home');
        }

        return back()->withErrors([
        'email' => 'Введенные данные не соотвествуют',
        ]);


    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginform');
    }

}
