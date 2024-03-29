{{-- @extends('layouts.layout_red')

@section('contentred')
    <form action="{{ route('photos.store') }}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Создать фотографию">
    </form>
@endsection --}}
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
        <h2>Добавить новое фото в альбом</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <form style="width: 550px; margin: 0 auto" action="{{ route('photos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Имя фотографии</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Описание фотографии</label>
          <textarea name="description" id="description" placeholder="description" class="form-control" rows="3">
            {{ old('description') }}
          </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Путь к файлу</label>
            <input name = "path" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
</body>

</html>


