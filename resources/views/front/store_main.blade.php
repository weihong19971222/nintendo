@extends('layouts/nav_footer_shop')

@section('title_name')
商城首頁
@endsection

@section('css')
<link rel="stylesheet" href="./css/store_main.css">
<link rel="stylesheet" href="./css/store_page.css">
@endsection



@section('cont')

<div id="host" class="type">
    <h3>主機</h3>
    <img src="./img/store_main/arrow.png" width="30px" height="30px" alt="">
</div>

<!-- host_swiper -->
<div class="swiper-container swiper_host">
    <div class="swiper-wrapper">
        @foreach ($hosts as $host)
        <div class="swiper-slide"><img src="{{$host->products_image}}" width="80%"  alt=""></div>
        @endforeach
    </div>
</div>

    <div id="controller" class="type">
        <h3>控制器</h3>
        <img src="./img/store_main/arrow.png" width="30px" height="30px" alt="">
    </div>
        <!-- controller_swiper -->
<div class="swiper-container swiper_controller">
    <div class="swiper-wrapper">
        @foreach ($controllers as $controller)
        <div class="swiper-slide"><img src="{{$controller->products_image}}" width="80%"  alt=""></div>
        @endforeach
    </div>
</div>

    <div id="amiibo" class="type">
        <h3>amiibo</h3>
        <img src="./img/store_main/arrow.png" width="30px" height="30px" alt="">
    </div>

                <!-- amiibo_swiper -->
<div class="swiper-container swiper_amiibo">
    <div class="swiper-wrapper">
        @foreach ($amiibos as $amiibo)
        <div class="swiper-slide"><img src="{{$amiibo->products_image}}" width="80%"  alt=""></div>
        @endforeach
    </div>
</div>
    <div id="charger" class="type">
        <h3>充電器</h3>
        <img src="./img/store_main/arrow.png" width="30px" height="30px" alt="">
    </div>


                <!-- charger_swiper -->
<div class="swiper-container swiper_charger">
    <div class="swiper-wrapper">
        @foreach ($chargers as $charger)
        <div class="swiper-slide"><img src="{{$charger->products_image}}" width="80%"  alt=""></div>
        @endforeach
    </div>
</div>
    <div id="other" class="type">
        <h3>其他</h3>
        <img src="./img/store_main/arrow.png" width="30px" height="30px" alt="">
    </div>

                <!-- other_swiper -->
                <div class="swiper-container swiper_other">
                    <div class="swiper-wrapper">
                        @foreach ($others as $other)
                        <div class="swiper-slide"><img src="{{$other->products_image}}" width="80%"  alt=""></div>
                        @endforeach
                    </div>
                </div>
@endsection




