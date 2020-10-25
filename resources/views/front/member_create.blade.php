@extends('layouts/nav_footer')
@section('title_name')
會員註冊
@endsection

@section('css')
<link rel="stylesheet" href="./css/member_create.css">
@endsection


@section('cont')
<div id="create">
    <div id="member_icon">
        <img src="./img/member_create/member_icon.png" width="90px" alt="">
    </div>
    <p>建立Nintendo Account</p>
    <p>若擁有以下帳號，便可輕輕鬆鬆建立Nintendo Account。</p>
    <div class="account_btn">
        <a href=""><img src="./img/member_create/fb_icon.png" width="40%" alt=""></a>
        <a href=""><img src="./img/member_create/google_icon.png" width="40%" alt=""></a>

    </div>
    <div class="account_btn">

            <a href=""><img src="./img/member_create/apple_icon.png" width="40%" alt=""></a>


            <a href=""><img src="./img/member_create/twitter_icon.png" width="40%" alt=""></a>


    </div>
</div>
<div id="create_form">
    <h2>沒有上述帳號時，請輸入以下資訊。</h2>
    <form action="" method="">
        <div class="form_group">
            <label for="account_name">暱稱</label>
            <div class="form_width">
                <input type="text" name="account_name" required placeholder="10個字以內的文字"><br>
                <small>※任天堂將於聯絡通知時使用，不會擅自洩漏給他人。</small>
            </div>
        </div>

        <div class="form_group">
            <label for="account_email">電子郵件信箱</label>
            <div class="form_width">
                <input type="email" name="account_email" required placeholder="電子郵件信箱"><br>
                <small>※推薦使用電腦的電子郵件信箱或Webmail。</small>
            </div>
        </div>

        <div class="form_group">
            <label for="account_password">密碼</label>
            <div>
                <input type="password" name="account_password" required placeholder="8個以上包含半形英文和數字"><br>
            </div>
        </div>

        <div class="form_group">
            <label for="account_repassword">再次輸入密碼</label>
            <div>
                <input type="email" name="account_repassword" required placeholder="8個以上包含半形英文和數字"><br>
            </div>
        </div>

        <div class="form_group">
            <label for="account_birthday">出生年月日</label>
            <div class="form_width">
                <input id="account_birthday" type="date" value="" required ><br>
                <small>※日後無法修改出生年月日。</small>

            </div>
        </div>

        <div class="form_group">
            <label for="account_sex">性別</label>
            <div class="form_width">
               <select name="account_sex" id="">
                <option value="未選擇">未選擇</option>
                   <option value="男">男</option>
                   <option value="女">女</option>
                   <option value="人妖">人妖</option>
               </select>
            </div>
        </div>

        <div class="form_group">
            <label for="account_local">國家/地區</label>
            <div class="form_width">
               <select name="account_local" id="">
                   <option value="臺灣" selected>臺灣</option>
                   <option value="維尼">維尼</option>
               </select>
            </div>
        </div>
    </form>
    <form action="" method="">
    <div id="info">
            <div id="info_check">
                <input  type="checkbox" name="info_check">
                <p>願意接收任天堂以郵件寄送的遊戲軟體，智慧型手機應用程式之最新資訊或優惠活動，以及來自My Nintendo的「可獲得點數的問卷」之說明介紹。</p>
            </div>
            <p>※此設定可隨時於帳號設定變更。</p>
            <div id="info_check2">
                <input  type="checkbox" name="info_check2">
                <p>同意Nintendo Account的使用條款和隱私權政策</p>
            </div>
    </div>
    <a href="member_center"><div id="create_btn" >
        <p>建立</p>
    </div></a>
</form>
</div>
@endsection

