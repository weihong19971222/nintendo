@extends('layouts/nav_footer')
@section('title_name')
會員登入
@endsection


@section('css')
<link rel="stylesheet" href="./css/member_login.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
@endsection

@section('cont')
<div id="member_login">
    <div id="member_logo">
        <img src="./img/member_login/member_logo.png" width="50%" alt="">
    </div>
    <p id="member_logo_text">Nintendo Account</p>
    <form action="" method="">
        <input type="text" name="" value="" required placeholder="電子郵件信箱/登陸ID"><br>
        <input type="password" name="" value="" required placeholder="密碼"><br>
        <a href=""><span>忘記密碼</span></a>
        <a href="/member_center"><div id="login_btn">
           <p>登入</p>
        </div></a>
    </form>
    <div id="other_account">
        <p>使用其他帳號輕鬆登入</p>
        <a href=""><img src="./img/member_login/FB_LOGO.png" width="300px" alt=""></a>
        <a href=""><img src="./img/member_login/GOOGLE_LOGO.png" width="300px" alt=""></a>
        <a href=""><img src="./img/member_login/TWITTER_LOGO.png" width="300px" alt=""></a>
        <a href=""><img src="./img/member_login/APPLE_LOGO.png" width="300px" alt=""></a>

    </div>
    <p id="no_account">沒有帳號的玩家</p>
    <a href="/member_create"><div id="no_account_btn">
      <p>建立新帳號</p>
    </div></a>
</div>
@endsection
