@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <h1>Фотография {{$id}} удалена</h1>
    </div>
@endsection

@section('title')
    @parent : Фото удалено
@endsection
