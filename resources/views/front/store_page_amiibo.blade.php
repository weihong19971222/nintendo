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
        <p>Amiibo</p>
    </div>
<div id="content">
    @foreach ($amiibos as $amiibo)
    <a href="/store_content_{{$amiibo->id}}"><div class="content_card">
        <img src="{{$amiibo->products_image}}" width="100%" alt="">
        <p>{{$amiibo->products_name}}</p>
        <p>${{$amiibo->products_price}}</p>
    </div></a>
    @endforeach

</div>
@endsection




