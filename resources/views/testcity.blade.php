@extends('layouts.layout')


@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <p>Город: {{ $data->Name }}</p>
            <p>Континет: {{ $data->Continent }}</p>
            <p>Регион: {{$data->Region}}</p>
            <p>население: {{$data->Population}}</p>
        </div>
    </div>
@endsection

@section('title')
    @parent : Главная
@endsection
