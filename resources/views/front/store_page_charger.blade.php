@extends('layouts/nav_footer_shop')

@section('title_name')
商城分頁
@endsection




@section('css')
<link rel="stylesheet" href="./css/store_main.css">
<link rel="stylesheet" href="./css/store_page.css">
@endsection

@section('cont')


    <div id="title">
        <p>充電器</p>
    </div>
<div id="content">
    @foreach ($chargers as $charger)
    <a href="/store_content_{{$charger->id}}"><div class="content_card">
        <img src="{{$charger->products_image}}" width="100%" alt="">
        <p>{{$charger->products_name}}</p>
        <p>${{$charger->products_price}}</p>
    </div></a>
    @endforeach

</div>
@endsection

