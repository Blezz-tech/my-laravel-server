<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Список фотографий</h1>
    <ul>
        <li>Фото 1 {{ $photos[0]->id }} с названием {{ $photos[0]->name }}  <a
                href="{{ route('photos.show', $photos[0]->id) }}"> Показать</a>
            <a href="{{ route('photos.edit', $photos[0]->id) }}"> Редактировать</a>
            <a href="{{ route('photos.destroy', $photos[0]->id) }}"> Удалить</a>
        </li>
        <li>Фото 2 {{ $photos[1]->id }} с названием {{ $photos[1]->name }}<a
                href="{{ route('photos.show', $photos[1]->id) }}"> Показать</a>
                <a href="{{ route('photos.edit', $photos[1]->id) }}"> Редактировать</a>
                <a href="{{ route('photos.destroy', $photos[1]->id) }}"> Удалить</a></li>
    </ul>
</body>

</html>
