@extends('layuot')

@section('title','MY SERVICES')


@section('content')

<!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Тут наши данные:</h1>
<ul>
         @foreach($contacts as $contact)
         <li>{{$contact->title}}:{{$contact->value}}</li>
           @endforeach

           </ul>
        </div>
        @endsection
