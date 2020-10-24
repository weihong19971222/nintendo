@extends('layouts/nav_footer')

@section('title_name')
商城首頁
@endsection

@section('css')
<link rel="stylesheet" href="./css/store_main.css">
@endsection



@section('cont')
<div id="title">
    <div id="shop_logo">
        <p>Nintendo Store</p>
    </div>
    <img src="./img/store_main/shopping-cart-icon.png" width="50px" height="50px" alt="">
</div>
<div id="shop_button_group">
    <a href="/store_main">首頁</p></a>
    <a href="/store_page_host"><p>主機</p></a>
    <a href="/store_page_controller"><p>控制器</p></a>
    <a href="/store_page_amiibo"><p>amiibo</p></a>
    <a href="/store_page_charger"><p>充電器</p></a>
    <a href="/store_page_other"><p>其他</p></a>
</div>

<!-- shop_banner -->
<div class="swiper-container swiper_shop">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./img/store_main/b1.jpg" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="./img/store_main/b2.jpg" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="./img/store_main/b3.jpg" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="./img/store_main/b4.jpg" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="./img/store_main/b5.png" width="100%" alt=""></div>
    </div>
</div>

<div id="host" class="type">
    <h1>主機</h1>
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
        <h1>控制器</h1>
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
        <h1>amiibo</h1>
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
        <h1>充電器</h1>
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
        <h1>其他</h1>
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







@section('js')
<!-- SWIPER -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="./js/store_main.js"></script>
@endsection
