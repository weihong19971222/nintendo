@extends('layouts/nav_footer')
@section('title_name')
最新消息
@endsection
@section('css')
 <link rel="stylesheet" href="./css/news.css">
@endsection
@section('cont')
 <main class="w-100">
        <section id="news_top">
            <p id="p_first"></p>
            <p id="p_second"></p>
            <div id="card_group" class="container">
                <div id="row_first" class="row">
                    @foreach ($news as $new)
                        <div class="col-4">
                            <p class="news_date mt-2">{{$new->news_date}}</p>
                            <img class="news_top_img" src="{{$new->news_img}}" alt="">
                            <p class="news_cont mt-2">{{$new->news_title}}</p>
                            <a href="/news_info_{{$new->id}}"><div class="read_more"><img src="./img/news/read_more.png" alt=""></div></a>
                        </div>
                    @endforeach

                    {{-- <div class="col-4">
                        <p class="news_date mt-2">2020.10.10</p>
                        <img class="news_top_img" src="./img/news/1.jpg" alt="">
                        <p class="news_cont mt-2">字測試文字測試文字測試文字測試文字測字測試文字測試文字文字測試文</p>
                        <div class="read_more"><img src="./img/news/read_more.png" alt=""></div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4"></div> --}}
                </div>
                {{-- <div id="row_second" class="row">
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div> --}}
                <div class="w-100 d-flex justify-content-center">
                    {{ $news->links() }}
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
<script>
        // p跑馬燈
        function size_auto() {
            $news_top_width_size = $("#news_top").css("width").replace("px", "")/100;
            var a=Math.ceil($news_top_width_size);
            $pagination_li_width_size=$(".pagination li").css("width");
            $(".pagination li").css("line-height",$pagination_li_width_size);
            $(".pagination").css("height",$pagination_li_width_size);
            for(i=0;i<a*2;i++){
                $("#p_first").append("NEWS!<b>NEWS!</b>");
                $("#p_second").append("NEWS!<b>NEWS!</b>");
            }
        }

        size_auto();
        $(window).resize(function () {
            $("#p_first").html("");
            $("#p_second").html("");
            size_auto();
        });

    </script>
@endsection

