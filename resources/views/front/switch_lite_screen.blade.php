@extends('layouts/nav_footer')
@section('title_name')
SwitchLite
@endsection
@section('css')
    <link rel="stylesheet" href="./css/SwitchLite_Screen.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
@endsection
@section('cont')
<div id="switch_grey">
    <p>NintendoSwitchLite</p>
    <img src="./img/SwitchLite_Screen/switch-lite-grey.png" width="50%" alt="">
</div>
<div id="switch_pink">
    <div id="pink">
        <img data-aos="fade-right" data-aos-duration="1500" src="./img/SwitchLite_Screen/switch-lite-pink.png"
            width="100%" alt="">
    </div>
    <p data-aos="fade-left" data-aos-duration="3000">
        體積小、輕巧、方便攜帶外出遊玩。
        手提專用的NintendoSwitch。<br>
        X <br>
        <span>
            「Nintendo Switch Lite」採控制器和主機一體成形、細小輕巧，是方便
            攜帶外出的手提專用Nintendo Switch。

            支援所有可利用手提模式來玩的Nintendo Switch遊戲軟體。不單止推薦
            給會經常攜帶外出遊玩的用家，想和已持有Nintendo Switch的家人朋友
            一起透過網路或鄰近主機連線進行多人遊戲的用家也很適合。

            ※無法輸出到電視
        </span>

    <p>

</div>

<div id="switch_yellow">
    <div id="yellow">
        <img data-aos="fade-left" data-aos-duration="1500" src="./img/SwitchLite_Screen/switch-lite-yellow.png"
            width="100%" alt="">
    </div>
        <p data-aos="fade-right" data-aos-duration="3000">
            更輕鬆地拿著喜愛的遊戲外出。
            NintendoSwitchLite對應「手提模式」
            可遊玩所NintendoSwitch遊戲軟體。<br>
            X <br>
            <span>
                即使是支援「手提模式」的遊戲軟體，在Nintendo Switch Lite上用到Joy-Con
                功能（HD震動、動感IR照相機、Joy-Con內置動作感應器）的玩法會受到限制
                部分不支援「手提模式」的遊戲軟體只需另外購買Joy-Con和Joy-Con充電握
                把」也可進行遊玩。
            </span>

        <p>

</div>

<div id="switch_blue">
    <div id="blue">
        <img data-aos="fade-right" data-aos-duration="1500" src="./img/SwitchLite_Screen/switch-lite-blue.png"
            width="100%" alt="">
    </div>
    <p data-aos="fade-left" data-aos-duration="3000">
        和其他Nintendo Switch玩家連繫起來。<br>
        聚會時一起連線。<br>
        X <br>
        <span>
            無論是「Nintendo Switch」，或是「Nintendo Switch Lite」，帶主機聚一起就
            可透過鄰近主機連線，在《任天堂明星大亂鬥 特別版》和《Splatoon2》等遊戲
            軟體上享受對戰和協力遊玩的樂趣，最多可連繫8台主機。

        </span>

    <p>

</div>
<div id="switchlite_white">
    <div id="wt"></div>
    <div id="wb" data-aos="zoom-in" data-aos-duration="1500">
        <div id="description_titile">主要功能/規格</div>
        <div id="description_content">
            <div id="description_content_pic"></div>
        </div>
        <div id="description_botton_group">
            <div id="q1" class="description_botton" onclick="boxclick(1)">
                <div class="star"></div>
            </div>
            <div id="q2" class="description_botton" onclick="boxclick(2)">
                <div class="star"></div>
            </div>
            <div id="q3" class="description_botton" onclick="boxclick(3)">
                <div class="star"></div>
            </div>
            <div id="q4" class="description_botton" onclick="boxclick(4)">
                <div class="star"></div>
            </div>
        </div>
    </div>
</div>
<div id="switchlite_info">
    <div id="switchlite_info_text" data-aos="fade-right" data-aos-duration="1000">
        <div id="switchlite_info_text_menu">HOME選單</div>
        <div id="switchlite_info_text_news">
            <div id="switchlite_info_text_news_pic"></div>
            <div id="switchlite_info_text_news_text">
                <h2>遊戲新聞</h2>
                <p>有關遊戲的新資訊等將傳送到Nintendo Switch主機。</p>
            </div>
        </div>
        <div id="switchlite_info_text_shop">
            <div id="switchlite_info_text_shop_pic"></div>
            <div id="switchlite_info_text_shop_text">
                <h2>Nintendo eShop</h2>
                <p>可下載購買軟體等。此外，可從這裡得知電視廣告及介紹影片等遊戲軟體資訊。(台灣地區暫無法支援)</p>
            </div>
        </div>
        <div id="switchlite_info_text_photo">
            <div id="switchlite_info_text_photo_pic"></div>
            <div id="switchlite_info_text_photo_text">
                <h2>相簿</h2>
                <p>可瀏覽拍攝的遊戲畫面等等，或分享到社群網站。</p>
            </div>
        </div>
    </div>
    <div id="switchlite_info_pic">
        <img data-aos="zoom-in-left" data-aos-duration="1000" src="./img/SwitchLite_Screen/switch-lite-grey3.png"
            alt="">
    </div>
</div>
<div id="switchlite_buy">
    <div id="buy_titile">選擇一個?</div>
    <div id="buy_pic_group">
        <div class="buy_pic" data-aos="fade-down" data-aos-duration="2000">
            <img src="./img/SwitchLite_Screen/switch-lite-grey2.png" width="100%" height="100%" alt="">
        </div>
        <div class="buy_pic" data-aos="fade-up" data-aos-duration="2000">
            <img src="./img/SwitchLite_Screen/switch-lite-yellow_2.png" width="100%" height="100%" alt="">

        </div>
        <div class="buy_pic" data-aos="fade-down" data-aos-duration="2000">
            <img src="./img/SwitchLite_Screen/switch-lite-pink2.png" width="100%" height="100%" alt="">

        </div>
        <div class="buy_pic" data-aos="fade-up" data-aos-duration="2000">
            <img src="./img/SwitchLite_Screen/switch-lite-blue2.png" width="100%" height="100%" alt="">

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/SwitchLite_Screen.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
@endsection


