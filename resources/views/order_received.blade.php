@extends('layuot')

@section('title','Заказ оформлен')
@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <!-- Blog Post -->
        <div class="card mb-4">
            <h3>Ваш заказ</h3>
            <table border="2">
                <tr>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Итого</th>
                </tr>
               @if(!Cart::isEmpty())
                @foreach(\Cart::getContent() as $post)
                    <tr>
                        <td> <img src="{{$post->attributes->image}}" width="100" height="50" ></td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->price}}</td>
                        <td> {{$post->quantity}} </td>
                        <td>{{$post->getPriceSum()}}</td>

                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" style="text-align: right" >ИТОГО</td>
                        <td style="background-color: #9561e2; font-weight:bold "  >
                            {{\Cart::getTotalQuantity()}}
                        </td>
                        <td style="background-color:grey; font-weight:bold">
                            {{\Cart::getTotal()}}
                        </td>
                    </tr>
                @endif
            </table>
            <h3>Контактные данные заказчика</h3>
            <table border="2">
                <tr>
                    <th>ФИО</th>
                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$order->email}}</td>
                </tr>
                <tr>
                    <th>Телефон</th>
                    <td>{{$order->phone}}</td>
                </tr>
                <tr>
                    <th>Адрес</th>
                    <td>{{$order->address}}</td>
                </tr>
                <tr>
                    <th>Комментарии</th>
                    <td>{{$order->notes}}</td>
                </tr>
            </table>
            <br>
<button type="button" class="btn btn-outline-dark">Оплатить</button>

        </div>
    </div>

@endsection
@section('side_bar')
    @include('side_bar')
@endsection
