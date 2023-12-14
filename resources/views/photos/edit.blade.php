@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <h1>Редактирование фото с номером {{ $id }}</h1>
        <form action="{{ route('photos.update', $id) }}" method="POST">
            @method('PUT')
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
            <input type="submit" value="Изменить фотографию">
        </form>
    </div>
@endsection

@section('title')
    @parent : Фото успешно добавлено
@endsection
