@extends('layouts/nav_footer')
@section('title_name')
3DS
@endsection
@section('css')
<link rel="stylesheet" href="./css/3ds_screen.css">
@endsection
@section('cont')
     <div id="tds_banner"></div>
    <div id="tds_nav">
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <a href="#tw_title">
            <p>主機</p>
        </a>
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <a href="#game_title">
            <p>遊戲</p>
        </a>
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <a href="#app_title">
            <p>內建軟體</p>
        </a>
    </div>
    <div id="tw_title">
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <p>繁體中文</p>
    </div>
    <div id="tw_pic"></div>
    <div id="tw_content_title">
        <div id="tw_content_title1">
            <div id="tw_content_title2">組合內容</div>
        </div>
    </div>
    <div id="tw_content">
        <div class="tw_content_card">
            <img src="./img/3ds_screen/w_3dsxl_04.jpg" alt="">
        </div>
        <div class="tw_content_card">
            <img src="./img/3ds_screen/w_3ds_06.jpg" alt="">

        </div>
        <div class="tw_content_card">
            <img src="./img/3ds_screen/w_3dsxl_05.jpg" alt="">

        </div>
        <div class="tw_content_card">
            <img src="./img/3ds_screen/w_3dsxl_06.jpg" alt="">

        </div>
        <div class="tw_content_card">
            <img src="./img/3ds_screen/w_3ds_09.jpg" alt="">

        </div>
        <div class="tw_content_card">
            <div class="tw_content_card_text">
                <div class="tw_content_card_text_circle"></div>
                <p>簡單使用指南</p>
            </div>
            <div class="tw_content_card_text">
                <div class="tw_content_card_text_circle"></div>
                <p>使用說明書</p>
            </div>
            <div class="tw_content_card_text">
                <div class="tw_content_card_text_circle"></div>
                <p>保固卡</p>
            </div>
        </div>
    </div>
    <div id="game_title">
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <p>繁體中文版主機專用遊戲</p>
    </div>
    <div id="game_pic"></div>
    <div id="game_card_group">
        <div id="game_card_1" class="game_card">
            <img src="./img/3ds_screen/000001_1505379618.jpg" width="100%" height="100%" alt="">
        </div>
        <div id="game_card_2" class="game_card">
            <img src="./img/3ds_screen/0000075097.png" width="100%" height="100%" alt="">
        </div>
        <div id="game_card_3" class="game_card">
            <img src="./img/3ds_screen/i010003_1505379651.jpg" width="100%" height="100%" alt="">
        </div>
        <div id="game_card_4" class="game_card">
            <img src="./img/3ds_screen/sun.png" width="100%" height="100%" alt="">
        </div>
        <div id="game_card_5" class="game_card">
            <img src="./img/3ds_screen/moon.png" width="100%" height="100%" alt="">
        </div>
    </div>
    <div id="game_info">
        <div id="game_info_pic">
            <img src="./img/3ds_screen/ct_logo.jpg" width="80%" height="90%" alt="">
        </div>
        <div id="game_info_text">
            <div class="game_info_text_info">
                <div class="game_info_text_info_circle"></div>
                <p>此標誌表示，本商品是由任天堂於該地區所銷售的原廠公司貨。</p>
            </div>
            <div class="game_info_text_info">
                <div class="game_info_text_info_circle"></div>
                <p>有標誌的遊戲軟體，僅適用於繁體中文版Nintendo 3DS XL / Nintendo 3DS主機遊玩。</p>
            </div>
            <div class="game_info_text_info">
                <div class="game_info_text_info_circle"></div>
                <p>標有此標誌之Nintendo 3DS XL / Nintendo 3DS主機，自購買日期起即享有一年原廠保固。</p>
            </div>

        </div>

    </div>
    <div id="app_title">
        <img src="./img/3ds_screen/3DSred.png" height="70%" alt="">
        <p>內建 / 下載軟體</p>
    </div>
    <div id="app_content">
        <div id="app_content_app">
            <img src="./img/3ds_screen/feature_03-01.jpg" width="100%" alt="">
            <h2>主機內建軟體</h2>
            <p>內置了各種軟件，例如照相機，音樂撥放器和Mii聚集的廣場，從購買主機之日起，您可以立即撥放。</p>
        </div>
        <div id="app_content_home">
            <img src="./img/3ds_screen/feature_03-02.jpg" width="100%" alt="">
            <h2>更改 "HOME" 選單</h2>
            <p>如果使用 "主題" ，則可以根據自己的心情(例如遊戲角色以及身體的顏色和樣式) 自定義HOME菜單。不僅牆紙，背景音樂，聲音效果，圖標等也會發生變化。</p>
        </div>

    </div>

@endsection
@section('js')
    <script src="./js/3ds_screen.js"></script>
@endsection





