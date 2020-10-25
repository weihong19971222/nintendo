<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>@yield('title_name')</title>
    <link rel="icon" href="./img/m_icon.png" >
    <link rel="shortcut icon" href="./img/m_icon.png" >
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/store_main.css">
    @yield('css')
</head>
<body>
    <div id="go_to_top">
        <a href="#"><img src="./img/nav/go-to-top-btn.png" alt=""></a>
    </div>

    <nav id="nav_">
            <div id="nav_cont">
                <div id="news" data-type="0" class="ino active">
                    <div class="row">
                        <a href="/"><div class="col-12"><span>回首頁</span></div></a>
                    </div>
                </div>
                <div id="host" data-type="1" class="ino ">
                        <div class="row">
                            <a href="/switch"><div class="col-12"><span>SWITCH</span></div></a>
                            <a href="/switch_lite"><div class="col-12"><span>SWITCH LITE</span></div></a>
                            <a href="/3ds"><div class="col-12"><span>3DS</span></div></a>
                            <a href="/amiibo"><div class="col-12"><span>AMIIBO</span></div></a>
                            <a href="/peripherals"><div class="col-12"><span>周邊設備</span></div></a>
                        </div>
                </div>
                <div id="game" data-type="2" class="ino">
                    <div class="row">
                        <a href="/game_softwa"><div class="col-12"><span>遊戲軟體一覽</span></div></a>
                    </div>
                </div>
                <div id="news" data-type="3" class="ino">
                    <div class="row">
                        <a href=""><div class="col-12"><span>最新消息</span></div></a>
                    </div>
                </div>
                <div id="server" data-type="4" class="ino">
                    <div class="row">
                        <a href="/service"><div class="col-12"><span>維修相關資訊</span></div></a>
                        <a href="/support"><div class="col-12"><span>Switch支援</span></div></a>
                        <a href="/member_login"><div class="col-12"><span>會員中心</span></div></a>
                    </div>
                </div>
                <div id="news" data-type="5" class="ino">
                    <div class="row">
                        <a href="/store_main"><div class="col-12"><span>購物商城</span></div></a>
                    </div>
                </div>
            </div>
            <div id="nav_btn_group">
                <div id="btn_exit"></div>
                <div id="tis_img"></div>
                <div id="host_amiibo" class="nav_btn">
                    <div class="swiper-container swiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./img/nav/index.png" alt="">
                                <p>首頁</p>
                                </div>
                        <div class="swiper-slide">
                            <img src="./img/nav/host_amiibo.png" alt="">
                            <p>主機/Amiibo</p>
                            </div>
                        <div class="swiper-slide">
                            <img src="./img/nav/game.png" alt="">
                            <p>遊戲軟體</p>
                            </div>
                        <div class="swiper-slide active">
                            <img src="./img/nav/news.png" alt="">
                            <p>最新消息</p>
                            </div>
                        <div class="swiper-slide">
                            <img src="./img/nav/service.png" alt="">
                            <p>客戶服務</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="./img/nav/shop.png" alt="">
                                <p>購物商城</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    <div id="nav" >
        <div class="container">

        <img id="menu" src="./img/nav/menu.png" alt="">
    </div>
    </div>
    <div id="title">
        <div id="shop_logo">
            <p>Nintendo Store</p>
        </div>
        <div id="shop_car">
            <a href="/add_shop_cart"><img src="./img/store_main/shopping-cart-icon.png" width="50px" height="50px" alt=""></a>
                <span id="cartTotalQuantity">
                    @guest
                        0
                    @else
                    <?php
                        $userId = auth()->user()->id;
                        $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();
                        echo $cartTotalQuantity;
                    ?>
                    @endguest
                </span>
        </div></div>
    <div id="shop_button_group">
        <a href="/store_main">首頁</p></a>
        <a href="/store_page_host"><p>主機</p></a>
        <a href="/store_page_controller"><p>控制器</p></a>
        <a href="/store_page_amiibo"><p>amiibo</p></a>
        <a href="/store_page_charger"><p>充電器</p></a>
        <a href="/store_page_other"><p>其他</p></a>
    </div>

    <!-- shop_banner -->
    <div class="swiper-container swiper_shop">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/store_main/b1.jpg" width="100%" alt=""></div>
            <div class="swiper-slide"><img src="./img/store_main/b2.jpg" width="100%" alt=""></div>
            <div class="swiper-slide"><img src="./img/store_main/b3.jpg" width="100%" alt=""></div>
            <div class="swiper-slide"><img src="./img/store_main/b4.jpg" width="100%" alt=""></div>
            <div class="swiper-slide"><img src="./img/store_main/b5.png" width="100%" alt=""></div>
        </div>
    </div>

    @yield('cont')

    <!-- 內容丟這 -->



    <footer >
        <div class="container">
            <img id="f_logo" src="./img/nav/footer_logo.png" alt="">
            <span>Copyright &copy; 2020 Nintendo</span>
        </div>
    </footer>
     <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="./js/nav.js"></script>

@yield('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/store_main.js"></script>
</body>
</html>
