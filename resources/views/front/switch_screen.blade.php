@extends('layouts/nav_footer')
@section('title_name')
Switch
@endsection
@section('css')
 <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="./css/switch_screen.css">
@endsection
@section('cont')
<div id="fog" class="lax" data-lax-opacity="(vh*0.9) 1, vh 0" data-lax-scale='0 1,vh 5'></div>
<div id="fog_bg" class="lax" data-lax-opacity="(vh*1.4) 0, (vh*1.5) 1">
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>
    <div class="bg lax" data-lax-rotate="0 0,1vh 180 | loop=1vh"></div>

</div>
<div id="switch_top"></div>
<div id="switch" class="lax" data-lax-opacity="(vh*0.9) 0, vh 1,(1.4*vh) 0"
    data-lax-translate-y='vh 0,2vh 1800,3vh 2780' data-lax-scale='(vh*0.8) 0.1,vh 1,2vh 0.8'>
    <p data-lax-opacity="1vh 1,(1.1*vh) 0">
        NintendoSwitch</p>
    <div id="test">
        <iframe id="Switch_Viedo" src="https://www.youtube.com/embed/SqBFH2BVvjo" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
</div>
<div id="switch_text">
    <p data-aos="zoom-in" data-aos-duration="1500">
        「NintendoSwitch」是一台可配合不同場合而改變形態的遊戲機。
        隨時隨地自由享樂。</p>
</div>
<div id="switch_text2">
    <p class="lax" data-lax-preset="swing fadeInOut zoomInOut" data-aos="fade-down-left">
        隨時隨地大家同樂<br>
        改變形態，可帶到任何地方
    </p>
</div>
<div id="switch_text3">

    <span class="lax" data-lax-preset="swing+180 fadeInOut zoomInOut"
        data-aos="fade-down-right">分享樂趣-將一個Joy-Con分享給對方，無論何時何地
        都可進行對戰或協力遊玩。</span>
</div>
<div id="switch_text4" class="container-fluid">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</div>
<div id="online" class="container">
    <div class="row">
        <div class="col-12 col-md-6" data-aos="fade-right" data-aos-duration="1500">
            <img src="./img/switch_screen/switch_video2.png" width="100%" alt="">
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center flex-column justify-content-center"
            data-aos="fade-left" data-aos-duration="1500">
            <h2>聚會時一起連線</h2>
            <p>「無論是「Nintendo Switch」，或是「
                聚會時一起連線。Nintendo Switch Lite」，帶主機聚一起就可透過鄰近主機連線，在《任天堂明星大亂鬥
                特別版》和《Splatoon2》等遊戲軟體上享受對戰和協力遊玩的樂趣，最多可連繫8台主機。</p>
        </div>
    </div>
    <div class="flex-md-row d-flex flex-column-reverse">
        <div class="col-12 col-md-6 d-flex align-items-center flex-column justify-content-center"
            data-aos="fade-right" data-aos-duration="1500">
            <h2>利用網路連繫起來</h2>
            <p>加入Nintendo Switch Online（付費），就可和全世界的玩家或遠方的朋友享受對戰和協力遊玩的樂趣。您也可以和智慧型手機專用應用程式連動，一邊等待朋友或進行語音聊天，一邊遊玩。</p>
        </div>
        <div class="col-12 col-md-6" data-aos="fade-left" data-aos-duration="1500">
            <img src="./img/switch_screen/switch_video.png" width="100%" alt="">
        </div>
    </div>
</div>
<div id="online_card" class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="./img/switch_screen/game_mode1.png" width="100%" height="100%" alt="">
            <div class="game_mode_card align-items-center  flex-column justify-content-top d-flex">
                <h2 class="">電視模式</h2>
                <p class="">透過電視的大畫面<br>大家一起盡情享樂</p>
                <span class="text-center pr-3 pl-3">連接電視畫面，透過臨場感十足的畫面細味遊戲，或約同家人朋友在客廳一起玩。</span>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <img src="./img/switch_screen/game_mode2.png" width="100%" height="100%" alt="">
            <div class="game_mode_card align-items-center  flex-column justify-content-top d-flex">
                <h2 class="">桌面模式</h2>
                <p class=" text-center">與家人朋友<br>分享畫面縮短距離</p>
                <span class="text-center pr-3 pl-3">即使外出在沒有電視的地方，將主機背面的支架拉出，和朋友分享手柄即可進行對戰和合作遊玩。</span>
            </div>

        </div>
        <div class="col-12 col-md-4">
            <img src="./img/switch_screen/game_mode3.png" width="100%" height="100%" alt="">
            <div class="game_mode_card align-items-center  flex-column justify-content-top d-flex">
                <h2 class="">掌上模式</h2>
                <p class=" text-center">攜帶高畫質的<br>大螢幕外出</p>
                <span class="text-center pr-3 pl-3">在上班途中等，無須擔心場地，隨時都可輕鬆進行遊戲。和三五知己通過鄰近的主機連機一起玩。</span>

            </div>
        </div>
    </div>
</div>
<div id="joy_con" class="container-fluid">
    <div class="row">
        <div class="col-md-4 align-items-center  flex-column justify-content-center d-flex">
            <img src="./img/switch_screen/title_joycon01.png" width="100%" alt="">
        </div>
        <div class=" col-md-4 align-items-center flex-column justify-content-center d-flex">
            <img src="./img/switch_screen/title_text01.png" width="100%" alt="">
            <img src="./img/switch_screen/title_text02_pc.png" width="100%" alt="">
            <p>Joy-Con
                Nintendo Switch的控制器
                「Nintendo Switch」。
                附有控制器「Joy-Con」左右各一
                可直握、橫握來操作，
                也有左右握持控制器的玩法。
                也可“分享”其中一個「Joy-Con」給別人，
                進行2人對戰或協力遊玩。</p>

        </div>
        <div class=" col-md-4 align-items-center flex-column justify-content-center d-flex">
            <img src="./img/switch_screen/title_joycon02.png" width="100%" alt="">

        </div>

    </div>
</div>
<div id="joy_con_info" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="./img/switch_screen/Joy-con.png" width="100%" alt="">
        </div>
    </div>
</div>
<div id="joy_con_pic">
    <p>主要功能/規格</p>
    <div id="joy_con_pic_group">
        <a href="./img/switch_screen/body-switch01-front.jpg" data-lightbox="example-set1" data-title="主機-正面">
            <img src="./img/switch_screen/icon-host.png" alt="" />
        </a>

        <a href="./img/switch_screen/body-switch02-front.jpg" data-lightbox="example-set2" data-title="底座-正面">
            <img src="./img/switch_screen/icon-base.png" alt="" />
        </a>

        <a href="./img/switch_screen/body-switch03-front.jpg" data-lightbox="example-set3" data-title="Joy-Con-正面">
            <img src="./img/switch_screen/icon-Joy-con.png" alt="" />
        </a>
    </div>
    <a href="./img/switch_screen/body-switch01-back.jpg" data-lightbox="example-set1" data-title="主機-背面"></a>
    <a href="./img/switch_screen/body-switch02-back.jpg" data-lightbox="example-set2" data-title="底座-背面"></a>
    <a href="./img/switch_screen/body-switch03-back.jpg" data-lightbox="example-set3" data-title="Joy-Con-背面"></a>
    <a href="./img/switch_screen/body-switch03-side.jpg" data-lightbox="example-set3" data-title="Joy-Con-側面"></a>
    <div id="joy_con_pic_group2">
        <a href="./img/switch_screen/body-switch04-front.jpg" data-lightbox="example-set4" data-title="Joy-Con腕帶-正面">
            <img src="./img/switch_screen/icon-Joy-con-wristband.png" alt="" />
        </a>

        <a href="./img/switch_screen/body-switch05-front.jpg" data-lightbox="example-set5" data-title="Joy-Con握把-正面">
            <img src="./img/switch_screen/icon-Joy-con-grip.png" alt="">
        </a>
    </div>
    <a href="./img/switch_screen/body-switch04-back.jpg" data-lightbox="example-set4" data-title="Joy-Con腕帶-背面"></a>
    <a href="./img/switch_screen/body-switch05-back.jpg" data-lightbox="example-set5" data-title="Joy-Con握把-背面"></a>


</div>
<div id="switch_info">
    <div id="switch_info_text" data-aos="fade-right" data-aos-duration="1000">
        <div id="switch_info_text_menu">HOME選單</div>
        <div id="switch_info_text_news">
            <div id="switch_info_text_news_pic"></div>
            <div id="switch_info_text_news_text">
                <h2>遊戲新聞</h2>
                <p>有關遊戲的新資訊等將傳送到Nintendo Switch主機。</p>
            </div>
        </div>
        <div id="switch_info_text_shop">
            <div id="switch_info_text_shop_pic"></div>
            <div id="switch_info_text_shop_text">
                <h2>Nintendo eShop</h2>
                <p>可下載購買軟體等。此外，可從這裡得知電視廣告及介紹影片等遊戲軟體資訊。(台灣地區暫無法支援)</p>
            </div>
        </div>
        <div id="switch_info_text_photo">
            <div id="switch_info_text_photo_pic"></div>
            <div id="switch_info_text_photo_text">
                <h2>相簿</h2>
                <p>可瀏覽拍攝的遊戲畫面等等，或分享到社群網站。</p>
            </div>
        </div>
    </div>
    <div id="switch_info_pic">
        <img data-aos="zoom-in-left" data-aos-duration="1000" src="./img/switch_screen/local-feature-pic-pc.png"
            alt="">
    </div>
</div>
@endsection



@section('js')
 <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- lax -->
    <script src="https://cdn.jsdelivr.net/npm/lax.js"></script>

    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/switch_screen.js"></script>
@endsection
