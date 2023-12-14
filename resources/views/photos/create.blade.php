@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('photos.store') }}" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td><label for="name">Имя фото</label></td>
                    <td><input id="name" type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="path">Путь к фото</label></td>
                    <td><input id="path" type="text" name="path" required></td>
                </tr>
            </table>
            <input type="submit" value="Сохранить фотографию">
        </form>
    </div>
@endsection

@section('title')
    @parent : Создание фото
@endsection
