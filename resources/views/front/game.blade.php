@extends('layouts/nav_footer')
@section('title_name')
任天堂遊戲一覽
@endsection
@section('css')
<link rel="stylesheet" href="./css/game.css">
<style>
    .page-item:first-child{
        display: block;
        margin-right: 50px;
        width: 100px;

    }
    .page-item:last-child{
        display: block;
        width: 100px;
        text-align: right;
    }
    .page-item{
        display: none;
    }
    .page-link{
        background-color:#fae9cd  ;
        border: 1px solid black;
        border-radius: 0;
    }
    .page-link:hover{
        background-color:#f8dfb6  ;
        border: 1px solid black;
    }
    .page-item.disabled .page-link{
        background-color:#fae9cd  ;
        border: 1px solid black;
        border-radius: 0;
    }
    .page-item:first-child .page-link{
        border-radius: 0;
    }
    .page-item:last-child .page-link{
        border-radius: 0;
    }
    .page-item a{
        color: black;
    }
</style>
@endsection
@section('cont')

 <div id="game_swiper" class="w-100">
        <img id="game_watch" src="./img/game/watch-pic.png" alt="">
        <!-- Swiper -->
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/game/test1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test8.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test9.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/game/test0.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <div id="game_list">
        <div class="container">
            <div id="type_select">
                <div id="select_group">
                    <div class="f_style active" id="featured">精選</div>
                    <div class="f_style" id="official">Nintendo發行</div>
                    <div class="f_style" id="all">所有(含第三方)</div>
                </div>
            </div>
            <div class="row">
                @foreach ($gamesoftwas2 as $gamesoftwa)
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{$gamesoftwa->game_image}}" alt="">
                        <div class="game_type">
                            <img src="{{$gamesoftwa->classification}}" alt="">
                            <p>{{$gamesoftwa->date}}</p>
                            <p>{{$gamesoftwa->publisher}}</p>
                            <p>盒裝版</p>
                            @if ($gamesoftwa->language_chinese==1)
                                <img src="./img/game/chinese.png" alt="">
                            @endif
                            {{-- <img src="./img/game/chinese.png" alt=""> --}}
                        </div>
                        <h5>{{$gamesoftwa->game_name}}</h5>
                    </div>
                @endforeach
                    <div class="w-100 d-flex justify-content-center">
                        {{ $gamesoftwas->links() }}
                    </div>

            </div>
        </div>
    </div>
@endsection



@section('js')
<script>
        window.onload=function (){
        var swiper2 = new Swiper('.swiper2', {
            slidesPerView: 5,
            slidesPerView: 'auto',
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            on:{
                slideChangeTransitionEnd: function(){
                    console.log($(".swiper2 .swiper-wrapper .swiper-slide img").attr("src"));
                    $(".swiper2 .swiper-wrapper .swiper-slide img").each(function(){
                        $(this).attr("src",$(this).attr("src").replace(".gif",".jpg"));
                    });
                    $(".swiper2 .swiper-wrapper .swiper-slide-active img").attr("src",$(".swiper2 .swiper-wrapper .swiper-slide-active img").attr("src").replace(".jpg",".gif"));
                },
            },
        });
        $(".f_style").click(function(){
            $(".f_style").removeClass("active");
            $(this).addClass("active");
        });
        $(".page-item:first span").html("<-NEXT");
        $(".page-item:first a").html("<-NEXT");
        $(".page-item:last span").html("NEXT->");
        $(".page-item:last a").html("NEXT->");
        }

    </script>
@endsection

