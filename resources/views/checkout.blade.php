
@extends('layuot')

@section('title','Оформление заказа')
@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- Blog Post -->
        <div class="card mb-4">
            <form  id="checkout"  method="post" action="{{route('checkout')}}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Имя</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Фамилия</span>
                    </div>
                    <input type="text" name="last_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
{{--                <div class="input-group mb-3">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>--}}
{{--                    </div>--}}
{{--                    <input type="email" name="email " class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">--}}
{{--                </div>--}}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Телефон</span>
                    </div>
                    <input type="tel" name="phone" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Адрес</span>
                    </div>
                    <input type="text" name="address" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Комментарии к покупке</span>
                    </div>
                    <textarea name="notes" class="form-control" aria-label="With textarea"></textarea>
                </div>
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
                                <td> <img src="/images/{{$post->attributes->image}}" width="100" height="50" ></td>
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
                <br>
                <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Оформить покупку">

            </form>

        </div>
    </div>

@endsection
@section('side_bar')
    @include('side_bar')
@endsection
