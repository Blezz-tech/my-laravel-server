<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Редактирование фото с номером {{$id}}</h1>
    <form action="{{route('photos.update', $id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Сохранить фотографию">
    </form>
</body>
</html>
