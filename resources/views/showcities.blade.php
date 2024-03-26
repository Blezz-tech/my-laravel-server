@extends('layouts.layout')


@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Город</th>
                        {{-- <th scope="col">Континет</th>
                        <th scope="col">Регион</th> --}}
                        <th scope="col">население</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr>
                            <td>{{ $city->Name }}</td>
                            {{-- <td>{{ $city->Continent }}</td>
                            <td>{{ $city->Region }}</td> --}}
                            <td>{{ $city->Population }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('title')
    @parent : Главная
@endsection
