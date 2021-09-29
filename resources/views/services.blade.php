@extends('layuot')

@section('title','MY SERVICES')


@section('content')

<!-- Blog Entries Column -->
        <div class="col-md-8" style="background-image: url(https://klike.net/uploads/posts/2019-06/medium/1561182951_6.jpg);" >

          <h1 class="my-4" >Тут наш сервис

          </h1>


            <!-- Контент страницы -->
            <div class="container text-center">
                <h1 class="mx-auto">Наш сервис</h1>


                <div   id="carousel" class="carousel slide d-inline-block" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMj7ek24OwGV7M9wzVf9ZdYykd0XDiuSsJwQ&usqp=CAU" alt="..." style="width:200px;height:200px;">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://images.ctfassets.net/hrltx12pl8hq/5KiKmVEsCQPMNrbOE6w0Ot/341c573752bf35cb969e21fcd279d3f9/hero-img_copy.jpg?fit=fill&w=800&h=300" alt="..." style="width:200px;height:200px;">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://avatanplus.com/files/resources/original/5cbe2c57c6dba16a46dd3707.jpg" alt="..." style="width:200px;height:200px;">
                        </div>
                    </div>
                    <!-- Элементы управления -->
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Предыдущий</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Следующий</span>
                    </a>
                </div>

            </div>


        </div>

        @endsection
@section('side_bar')
    <!-- Side Widget -->
    <div class="col-md-4">
    <div class="card my-4">
        <h5 class="card-header">Информация</h5>
        <div class="card-body">
            Дополнительная инфрмация по сервису


        </div>
    </div>
    </div>



@endsection








