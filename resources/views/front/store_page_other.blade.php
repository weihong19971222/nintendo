@extends('layouts/nav_footer')

@section('title_name')
商城分頁
@endsection




@section('css')
<link rel="stylesheet" href="./css/store_main.css">
<link rel="stylesheet" href="./css/store_page.css">
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

    <div id="title">
        <p>其他</p>
    </div>
<div id="content">
    @foreach ($others as $other)
    <a href="/store_content_{{$other->id}}"><div class="content_card">
        <img src="{{$other->products_image}}" width="100%" alt="">
        <p>{{$other->products_name}}</p>
        <p>${{$other->products_price}}</p>
    </div></a>
    @endforeach

</div>
@endsection




@section('js')
<!-- SWIPER -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="./js/store_main.js"></script>
@endsection
