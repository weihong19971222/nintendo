@extends('layouts/nav_footer')
@section('title_name')
會員中心
@endsection

@section('css')
<link rel="stylesheet" href="./css/member_center.css">
@endsection


@section('cont')
<div id="member_center">
    <a href="">
        <div id="logout">
            <p>登出</p>
        </div>
    </a>
    <div id="member_icon">
        <img src="./img/member_center/member_icon2.png" width="50%" alt="">
    </div>
    <h1>會員名字</h1>
    <div id="member_button_group">
        <div class="member_button" data-type="info">
            <img src="./img/member_center/member_icon2.png" width="23px" alt="">
            <p>編輯使用者資訊</p>
        </div>
        <div class="member_button" data-type="safe">
            <img src="./img/member_center/lock_icon.png" width="23px" alt="">
            <p>登入與帳號安全</p>
        </div>

        <div class="member_button" data-type="other">
            <img src="./img/member_center/tool_icon.png" width="23px" alt="">
            <p>其他設定&emsp;&emsp;&emsp;</p>
        </div>
        <div class="member_button" data-type="check">
            <img src="./img/member_center/qr_icon.png" width="23px" alt="">
            <p>簽到&emsp;&emsp;&emsp;&emsp;&emsp;</p>
        </div>
    </div>

    <div id="member_content_group">
        <div id="edit_user" class="all_content">
            <h2>編輯使用者資訊</h2>
            <div id="edit_form">
                <form action="">
                    <div id="personal_file_title">
                        <p>個人檔案</p>
                        <div id="personal_change" class="change_btn">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>暱稱&emsp;&emsp;&emsp;</p>
                        <input type="text" value="fuckyou123" readonly id="member_name" name="member_name">
                    </div>
                    <div id="form_group">
                        <p>出生年月日</p>
                        <input type="text" value="8787-87-87" readonly id="member_birthday" name="member_name">
                    </div>
                    <div id="form_group">
                        <p>性別&emsp;&emsp;&emsp;</p>
                        <input type="text" value="男" readonly id="member_sex" name="member_sex">
                    </div>
                    <div id="form_group">
                        <p>國家 / 地區</p>
                        <input type="text" value="臺灣" readonly id="member_local" name="member_local">
                    </div>
                    <div id="email_title">
                        <p>電子郵件信箱</p>
                        <div class="change_btn" id="email_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>電子郵件信箱</p>
                        <input type="text" value="bitch@porn.com" readonly id="member_email" name="member_email">
                    </div>
                    <div id="other_title">
                        <p>從其他帳號連動</p>
                        <div class="change_btn" id="other_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <div id="form_group_content">
                            <img src="./img/member_center/nitendo.png" width="23px" alt="">
                            <p>Nintendo Network ID</p>
                        </div>
                        <p>未連動</p>
                    </div>
                    <div id="form_group">
                        <div id="form_group_content">
                            <img src="./img/member_center/fb.png" width="23px" alt="">
                            <p>Facebook&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        </div>
                        <p>未連動</p>
                    </div>
                    <div id="form_group">
                        <div id="form_group_content">
                            <img src="./img/member_center/google.png" width="23px" alt="">
                            <p>Google&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        </div>
                        <p>未連動</p>
                    </div>
                    <div id="form_group">
                        <div id="form_group_content">
                            <img src="./img/member_center/twitter.png" width="23px" alt="">
                            <p>Twitter&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        </div>
                        <p>未連動</p>
                    </div>
                    <div id="form_group">
                        <div id="form_group_content">
                            <img src="./img/member_center/apple.png" width="23px" alt="">
                            <p>Apple&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                        </div>
                        <p>未連動</p>
                    </div>

                </form>
            </div>
        </div>
        <!-- ---------------------------超級分隔線---------------------------------------------------- -->
        <div id="safe_user" class="all_content">
            <h2>登入帳號與安全</h2>
            <div id="safe_form">
                <form action="">
                    <div id="change_password_title">
                        <p>變更密碼</p>
                        <div id="password_change" class="change_btn">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>密碼</p>
                        <input type="password" value="123456789" readonly id="member_password"
                            name="member_password">
                    </div>
                    <div id="change_id_title">
                        <p>變更登入ID</p>
                        <div class="change_btn" id="id_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>登入ID</p>
                        <p>未設定&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                    </div>
                    <div id="change_login_title">
                        <p>選擇登入方式</p>
                        <div class="change_btn" id="login_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>電子郵件信箱或登入ID</p>
                        <p>&emsp;&emsp;</p>
                    </div>


                    <div id="change_record_title">
                        <p>登入紀錄</p>
                        <div class="change_btn" id="record_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>Windows Taiwan</p>
                        <p>您所使用的電腦</p>
                    </div>

                    <div id="change_second_title">
                        <p>設定兩步驟驗證</p>
                        <div class="change_btn" id="second_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>未設定</p>
                        <p>&emsp;&emsp;</p>
                    </div>

                </form>
            </div>
        </div>
        <!-- ---------------------------超級分隔線---------------------------------------------------- -->
        <div id="other_user" class="all_content">
            <h2>其他設定</h2>
            <div id="other_form">
                <form action="">
                    <div id="change_friend_title">
                        <p>推薦好友功能</p>
                        <div class="change_btn" id="friend_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>使用</p>
                        <p>&emsp;&emsp;</p>
                    </div>

                    <div id="change_infoemail_title">
                        <p>設定通知郵件</p>
                        <div class="change_btn" id="infoemail_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>不接收</p>
                        <p>&emsp;&emsp;</p>
                    </div>

                    <div id="change_userinfo_title">
                        <p>發送使用者資訊</p>
                        <div class="change_btn" id="userinfo_change">
                            <p>變更</p>
                        </div>
                    </div>
                    <div id="form_group">
                        <p>允許</p>
                        <p>&emsp;&emsp;</p>
                    </div>

                    <div id="change_serve_title">
                        <p>使用帳號服務</p>
                        <div class="change_btn" id="serve_change">
                            <p>刪除帳號</p>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <!-- ---------------------------超級分隔線---------------------------------------------------- -->
        <div id="check_user" class="all_content">
            <h2>簽到</h2>
            <div id="check_form">
               <p>若於特定場所出示此QR Code，可以參加活動或領取特別優惠等。
                詳情請確認各活動或優惠的介紹。
                 </p>
                 <img src="./img/member_center/QRcode.png" width="50%" alt="">
                 <p>
                    ※此QR Code含有您的Nintendo Account之ID資訊。
                    簽到後，可能會因為寄送郵件、抽獎以及其他行銷活動等使用QR Code的資訊。
                    詳情請確認隱私權政策。
                 </p>
                 <p>
                    ※QR Code的有效期限為7天。過期請重新讀取頁面。
                    QR Code是DENSO WAVE INCORPORATED的註冊商標。
                 </p>
            </div>
        </div>


    </div>
</div>
@endsection


@section('js')
<script src="./js/member_center.js"></script>
@endsection
