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


