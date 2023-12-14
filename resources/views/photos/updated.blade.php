@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <h1>Данные о фотографии успешно обновлены</h1>
        <table class="table">
            <tr>
                <td>Имя фото</td>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <td>Путь к фото</td>
                <td>{{$path}}</td>
            </tr>
        </table>
    </div>
@endsection

@section('title')
    @parent : Фото успешно обновлено
@endsection
