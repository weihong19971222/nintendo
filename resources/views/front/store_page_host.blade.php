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
        <p>主機</p>
    </div>
<div id="content">
    @foreach ($hosts as $host)
   <a href="/store_content_{{$host->id}}"> <div class="content_card">
        <img src="{{$host->products_image}}" width="100%" alt="">
        <p>{{$host->products_name}}</p>
        <p>${{$host->products_price}}</p>
    </div></a>
    @endforeach

</div>
@endsection



