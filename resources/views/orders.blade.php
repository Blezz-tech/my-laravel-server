@extends('layouts.layout')


@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <p>Все заказы</p>
            @if (count($orders) == 0)
                <div class="mt-3">
                    <div class="alert alert-warning">Заказов нет</div>
                </div>
            @else
                <div class="mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Дата заказа</th>
                                <th scope="col">Код заказчика</th>
                                <th scope="col">Детали заказа</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_num }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->cust_id }}</td>
                                    <td>
                                        <a href="/order/{{ $order->order_num }}">
                                            <button>Состав заказа</button>
                                        </a>
                                    </td>
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
