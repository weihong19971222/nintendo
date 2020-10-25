@extends('layouts/nav_footer_shop')

@section('title_name')
產品內頁
@endsection

@section('css')
<link rel="stylesheet" href="./css/store_content.css">
<link rel="stylesheet" href="./css/store_main.css">
<link rel="stylesheet" href="./css/store_page.css">


@endsection

@section('cont')

<div id="title_type">
    <div id="title_type_text">
        <p>{{$products->products_type}}</p>
    </div>
</div>
<div id="content">
    <div id="content_text">
        <h1>{{$products->products_name}}</h1>
        <p>${{$products->products_price}}</p>
    </div>
    <div id="content_pic">
        <img src="{{$products->products_image}}"  width="100%"alt="">
    </div>
</div>
<div id="shop_car">
    <a href=""><div id="shop_car_btn">加入購物車</div></a>
</div>
<div id="transport">
    <img src="./img/store_content/transport.png" width="40px" alt="">
    <h3>運送 :</h3>
    <p>有現貨({{$products->products_quantity}})</p>
    <p>免額外付運費</p>
</div>
<div id="line"></div>
<div id="info">
    <h1>產品資訊</h1>
    <p>{{$products->products_info}}</p>
</div>
<div id="line2"></div>
@endsection

