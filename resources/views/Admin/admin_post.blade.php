@extends('layuot')

@section('title',"Пост")
@section('content')

    <!-- Blog Entries Column -->
    <div class="col-md-8" style="color:green">
        <br>
        @if(\Session::has('flash'))
            <h3>{{\Session::get('flash')}}</h3>
        @endif
        <hr>
        <form action="/admin/add_post/">
         <button class="btn-outline-danger">Кнопка добавления поста</button>
        </form>



        <h1 class="my-4">Редактор постов </h1>
    @if(Auth::check())
    <table class="table  table-hover dark">
     <thead>
     <tr>
         <th scope="col">ID</th>
         <th scope="col" >Title</th>
         <th scope="col"></th>

     </tr>
     </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td><a href="{{route('single_post',$post->id)}}" class="alert" style="color:silver">{{$post->title}}</a></td>
                <td><form action="/admin/edit_post/{{$post->id}}" method="get">
                <input type="hidden" name="id" value="{{$post->id}}" >
                <button type="submit" clas="btn btn-outline-danger">Редактировать пост</button>
                </form> </td>

                <td>
                    <form action="" method="post">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <button type="submit" clas="btn btn-outline-danger">Удалить пост</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        @endif
    <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            @if($posts->currentPage() !=1)
                <li class="page-item"><a class="page-link" href="?page=1">Начало</a></li>
                <li class="page-item"><a class="page-link" href="{{$posts->previousPageUrl()}}"><--</a></li>
            @endif
            @if($posts->count()>1)
                @for($count=1;$count<=$posts->lastPage();$count ++)
                    @if($count > $posts->currentPage()-3 and  $count < $posts->currentPage()+3)
                        <li class="page-item @if($count==$posts->currentPage()) active @endif"><a class="page-link" href="?page={{$count}}">{{$count}}</a></li>
                    @endif
                @endfor
            @endif
            @if($posts->currentPage() != $posts->lastPage())
                <li class="page-item"><a class="page-link" href="{{$posts->nextPageUrl()}}">--></a></li>
                <li class="page-item"><a class="page-link" href="?page={{$posts->lastPage()}}">Конец</a></li>
            @endif


        </ul>
    </div>
@endsection

