<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="sendcontact" method="post">
        @csrf
        <input type="text" name="name" placeholder="Введите имя">
        <input type="email" name="email" placeholder="Введите имя">
        <input type="submit" value="Отправить">
    </form>
            <a href="{{route('home')}}">На главную</a>
</body>
</html>
