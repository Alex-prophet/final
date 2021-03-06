@extends('layuot')

@section('title',"Добавить пост")
@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8" style="color:lawngreen">

        <h1 class="my-4">Редактировать пост {{$post->id}} </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Auth::check())
            <hr>
            <form action="edit_post" method="post" enctype="multipart/form-data">
                @csrf
                <p>Выберите автора: </p>
                <select  class="mbd-select md-form"  name="author_id">
                    @foreach($authors as $author)
                        <option @if($author->id == $post -> author_id) selected @endif value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
                <hr>
                <p>Выберите категорию:</p>
                <select  class="mbd-select md-form"  name="category_id[]">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <hr>
                <hr>
                <input type="hidden" name="id" value="{{$post->id}}">
                <input  type="text"  placeholder="New Title" name="title" value="{{$post->title}}" ><br>
                <textarea class="form-control" name="body">{{$post->body}}</textarea><br>
                <input  type="file"   name="image" ><hr>
                <button class="btn-save btn btn-primary btn-cm">Обновить пост </button>
            </form>
        @endif
    </div>
@endsection

