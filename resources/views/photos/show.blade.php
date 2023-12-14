@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <h1>Фото с номером {{$id}}</h1>
        <p>Имя: {{$name}}</p>
        <img src="{{$path}}" alt=""  w-100% height="300">
    </div>
@endsection

@section('title')
    @parent : Фото с номером {{$id}}
@endsection
