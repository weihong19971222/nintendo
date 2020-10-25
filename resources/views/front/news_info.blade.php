@extends('layouts/nav_footer')
@section('title_name')
{{$news_list->news_title}}
@endsection
@section('css')
<link rel="stylesheet" href="./css/news_info.css">
@endsection
@section('cont')
    {{-- {{$news_list}} --}}
    <div id="po">
        <div id="a">
            <img src="./img/b.png" alt="">
        </div>
    </div>
    <main>
        <div class="container">
            <span id="date">{{$news_list->news_date}}</span>
            <div id="main_title">{{$news_list->news_title}}</div>
            <div id="main_img"><img src="{{$news_list->news_img}}" alt=""></div>
            <div id="text_cont">{{$news_list->news_cont}}</div>
            <hr>
            <div id="yt_video">
                <iframe  src="https://www.youtube.com/embed/{{$news_list->news_yt_link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div id="yt_text"></div>
        </div>
    </main>
@endsection
@section('js')
<script>
        $(window).scroll(function(){
            $window_sctop = $(window).scrollTop();
            $document_h=$(document).height();
            $window_h=$(window).height();
            $sun=Math.floor($window_sctop/($document_h-$window_h)*100)+"%";
            $("#a").css("height",$sun);
        });
    </script>
@endsection



