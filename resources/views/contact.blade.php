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
