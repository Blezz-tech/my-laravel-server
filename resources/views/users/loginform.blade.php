<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Войти</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="width: 550px; margin: 0 auto" action="{{ route("login") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Введите email</label>
            <input type="email" class="form-control" id="name" name="email" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Введите пароль</label>
            <input type="password" class="form-control" id="name" name="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
    </div>
</body>
</html>
