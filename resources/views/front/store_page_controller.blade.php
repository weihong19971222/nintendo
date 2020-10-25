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
        <p>控制器</p>
    </div>
<div id="content">
    @foreach ($controllers as $controller)
    <a href="/store_content_{{$controller->id}}"><div class="content_card">
        <img src="{{$controller->products_image}}" width="100%" alt="">
        <p>{{$controller->products_name}}</p>
        <p>${{$controller->products_price}}</p>
    </div></a>
    @endforeach

</div>
@endsection



