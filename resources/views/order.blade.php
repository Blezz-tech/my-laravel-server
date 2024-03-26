@extends('layouts.layout')


@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Состав заказа</h2>
            @if (count($items) == 0)
                <div class="mt-3">
                    <div class="alert alert-warning">Состав пустой</div>
                </div>
            @else
                <div class="mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Производитель</th>
                                <th scope="col">Количество</th>
                                <th scope="col">Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->product->prod_name }}</td>
                                    <td>{{ $item->product->vendor->vend_name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->item_price }}</td>
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
