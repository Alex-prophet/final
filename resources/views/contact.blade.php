@extends('layuot')

@section('title','MY SERVICES')


@section('content')

<!-- Blog Entries Column -->

        <div class="col-md-8" style="background-image: url(https://mobimg.b-cdn.net/v3/fetch/f9/f9e2c0eb16aad0f18220215b40912920.jpeg);">

          <h1 class="my-2"> Наши данные: </h1>
            <h1 class="my-2" style="font-size:20px;">  Инстаграм: <a href="https://www.instagram.com/" ><img class="img-fluid" src="https://avatanplus.com/files/resources/original/5bf81e342d2dc1674135fbd9.png" alt="..." style="width:40px;height:40px;"></a> </h1>
            <h1 class="my-2" style="font-size:20px;">  Фейсбук: <a href="https://www.facebook.com/" ><img class="img-fluid" src="https://pngicon.ru/file/uploads/FaceBook_512x512.png" alt="..." style="width:40px;height:40px;"></a> </h1>
            <h1 class="my-2" style="font-size:20px;">  Канал на yotube: <a href="https://www.youtube.com/" ><img class="img-fluid" src="https://cdn.icon-icons.com/icons2/836/PNG/512/Youtube_icon-icons.com_66802.png" alt="..." style="width:40px;height:40px;"></a> </h1>
<ul>
         @foreach($contacts as $contact)
         <li>{{$contact->title}}:{{$contact->value}}</li>
           @endforeach

           </ul>
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":852,"width":1263,"zoom":15,"queryString":"Ивиса (IBZ), Сан-Антонио-Абад, Испания","place_id":"ChIJr7HMJfVFmRIRC1WADVXEsiY","satellite":false,"centerCoord":[38.90675676224804,1.4208403766568933],"cid":"0x26b2c4550d80550b","lang":"ru","cityUrl":"/spain/san-antonio-31324","cityAnchorText":"Карта [CITY1], Ибица, Испания","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"518127"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=518127';
                        s.async = true;
                        s.onload = function (e) {
                            window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                    })();</script><a href="https://1map.com/ru/map-embed">1 Map</a></div>


        </div>


        @endsection
@section('side_bar')
    <!-- Side Widget -->
    <div class="col-md-4">
        <div class="card my-4">
            <h5 class="card-header">Информация</h5>
            <div class="card-body">
             Дополниельная информация по контактам

            </div>
        </div>
    </div>



@endsection
