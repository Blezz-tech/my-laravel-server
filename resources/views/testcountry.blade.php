@extends('layouts.layout')


@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <p>Введите букву (англ)</p>
            <form action="testcountry" method="get">
                {{-- @csrf --}}
                <input type="text" name="country_text">
                <input type="submit" value="Отправить">
            </form>
            @if (count($countries) == 0)
                <div class="mt-3">
                    <div class="alert alert-warning">Запрашиваемых стран нет!</div>
                </div>
            @else
                <div class="mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Continent</th>
                                <th scope="col">SurfaceArea</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <td>{{ $country->Name }}</td>
                                    <td>{{ $country->Continent }}</td>
                                    <td>{{ $country->SurfaceArea }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('title')
    @parent : Главная
@endsection
