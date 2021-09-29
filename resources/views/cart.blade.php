@extends('layuot')

@section('title','Корзина')
@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8" >
        @if(\Session::has('flash'))
            <p>{{\Session::get('flash')}}</p>
        @endif
        <!-- Blog Post -->
        <div class="card mb-4">
            @if(!Cart::isEmpty())
            <form  id="checkout"  method="post" action="{{route('update_cart')}}">
                @csrf
            <table border="2">
                <p>Корзина</p>
                <tr>
                    <th>ИД</th>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Итого</th>
                    <th>Удалить</th>
                </tr>
                    @foreach(\Cart::getContent() as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td> <img src="/images/{{$post->attributes->image}}" width="100" height="50" ></td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->price}}</td>
                    <td> <input type="number" name="items [{{$post->id}}]"
                       value="{{$post->quantity}}" >
                    </td>
                    <td>{{$post->getPriceSum()}}</td>
                    <td>
                        <a href="{{route('delete_from_cart', $post->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                    @endforeach
                    <tr>
                            <td colspan="4" style="text-align: right" >ИТОГО</td>
                            <td style="background-color: #9561e2; font-weight:bold "  >
                                {{\Cart::getTotalQuantity()}}
                            </td>
                            <td style="background-color:grey; font-weight:bold">
                                {{\Cart::getTotal()}}
                            </td>
                            <td></td>
                        </tr>
            </table>
                <div style="text-align: center">
                    <a href="#" class="btn btn-danger"
                       onclick="document.getElementById('checkout').submit()">Обновить заказ</a>
                </div>
            <br>
            </form>
            <a href="{{route('checkout')}}" class="btn btn-secondary">Перейти к оформлениею заказа</a>
            @else
                <h3>Корзина заказов пуста</h3>
            @endif
        </div>
    </div>

@endsection
@section('side_bar')
    @include('side_bar')
@endsection


