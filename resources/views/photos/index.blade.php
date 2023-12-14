@extends('layouts.layout_photos')

@section('content')
    <div class="container mt-4">
        <h1>Список фотографий</h1>
        <a href="{{ route('photos.create') }}">Создать фото</a>
        <table class="table">
            <tr>
                <td>Имя</td>
                <td>Путь</td>
                <td></td>
                <td></td>
            </tr>
            @forelse ($photos as $photo)
                <tr>
                    <td>{{ $photo->name }}</td>
                    <td>{{ $photo->path }}</td>
                    <td><a href="{{ route('photos.edit', $photo->id) }}">Редактировать</a></td>
                    <td><a href="{{ route('photos.show', $photo->id) }}">Просмотреть</a></td>
                    <td>
                        <form action="{{ route('photos.destroy', $photo->id) }}">
                            @method('Delete')
                            <input class="btn btn-primary" type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection

@section('title')
    @parent : Все фото
@endsection
