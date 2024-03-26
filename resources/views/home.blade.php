@extends('layouts.layout')


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

<div class="container">
    <div class="col-sm-4 oftset-md-1 py-4">
        <h4 class="text-white">Contact</h4>
        <ul class="list-unstyled">
        <li><a href="#" class="text-white">Follow on Twitter</a></li>
        <li><a href="#" class="text-white">Like on Facebook</a></li>
        <li><a href="about.html" class="text-white">About</a></li>

        @auth
        <li><a href="#">{{ Auth::user()->name }}</a></li>
        <li><a href="{{route('logout')}}">Выйти</a></li>
        @endauth

        @guest
        <li><a href="{{route("users.create")}}">Регистрация</a></li>
        <li><a href="{{route("loginform")}}">Войти</a></li>
        @endguest
        </ul>
    </div>
</div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($photos as $photo)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{$photo->path}}" alt=""  w-100% height="300">

                            <div class="card-body">
                                <p class="card-text">{{ $photo->name }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-warning">Запрашиваемых фото пока нет, добавьте их!</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('title')
    @parent : Главная
@endsection
