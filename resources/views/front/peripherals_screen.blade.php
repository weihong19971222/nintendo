@extends('layouts/nav_footer')
@section('title_name')
周邊設備
@endsection

@section('css')
<link rel="stylesheet" href="./css/peripherals_screen.css">
@endsection


@section('cont')
<div id="peripherals_loading">
    <img src="./img/peripherals_screen/NintendoSwitchProController.png" width="30%" alt="">
</div>
<div id="SwitchProController">
    <div id="SwitchProControlleTitle">
        <p>Nintendo Switch Pro<br>控制器</p>
    </div>
    <div id="SwitchProControlleContent">
        <div class="SwitchProControlleContent_div">
            <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>附屬品 : USB充電線</p><br>
        </div>
        <div class="SwitchProControlleContent_div">
            <img src="./img/peripherals_screen/sup.png" width="150px" height="50px" alt="">
            <p>Switch，SwitchLite</p>
        </div>
        <div class="SwitchProControlleContent_div">
            <p>握把型讓玩家更容易握著，也可以長時間透過TV模式或是桌上模式來輕鬆玩遊戲的無線控制器。</p>
        </div>
    </div>
    <div id="SwitchProControllePic"></div>
</div>
<div id="peripherals_JoyCon">
    <img id="joyconleft" src="./img/peripherals_screen/joy-con_red.png" width="8%" alt="">
    <img id="joyconright" src="./img/peripherals_screen/joy-con_blue.png" width="8%" alt="">
</div>
<div id="SwitchProController">
    <div id="SwitchProControlleTitle">
        <p>Joy-Con&nbsp&nbsp(L)&nbsp&nbsp/&nbsp&nbsp(R)</p>
    </div>
    <div id="SwitchProControlleContent">
        <div class="SwitchProControlleContent_div">
            <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>附屬品 :Joy-Con腕帶</p><br>
        </div>
        <div class="SwitchProControlleContent_div">
            <img src="./img/peripherals_screen/sup.png" width="150px" height="50px" alt="">
            <p>Switch，SwitchLite</p>
        </div>
        <div class="SwitchProControlleContent_div">
            <p>即使只有一台主機，依軟體而異，可分享「Joy-Con」進行多人遊戲</p>
        </div>
    </div>
    <div id="SwitchProControllePic2"></div>
</div>
<div id="peripherals_circle">
    <img src="./img/peripherals_screen/circle.png" width="25%" alt="">
</div>
<div id="circle_content">
    <div id="circle_title">
        <p>方向盤兩個組合</p>
    </div>
    <div id="circle_info">
        <div id="circle_info_pic">
            <img src="./img/peripherals_screen/hundle_image-03.jpg" alt="">
        </div>
        <div id="circle_info_text">
            <div class="circle_info_text_content">
                <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            </div>
            <div class="circle_info_text_content">
                <img src="./img/peripherals_screen/sup.png" width="120px" height="40px" alt="">
                <p>Switch / SwichLite</p>
            </div>
            <div class="circle_info_text_content">
                <p>安裝「Joy-Con」後，可以駕駛觸感來操作，最適合體驗《瑪利歐賽車8 豪華版》等競速遊戲。<br>可安裝左右任何一個「Joy-Con」。</p>
            </div>
            <div class="circle_info_text_content">
                <span>※本商品不附有「Joy-Con」<br>※在Nintendo Switch Lite上使用時需另外準備Joy-Con</span>
            </div>
        </div>
    </div>
</div>
<div id="other">
    <p>其他</p>
</div>
<div id="switchbag_content">
    <div id="switchbag_title">
        <p>Nintendo Switch<br>便攜包</p>
    </div>
    <div id="switchbag_info">
        <div id="switchbag_info_text">
            <div class="switchbag_info_text_content">
                <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            </div>
            <div class="switchbag_info_text_content">
                <img src="./img/peripherals_screen/sup.png" width="120px" height="40px" alt="">
                <p>Switch</p>
            </div>
            <div class="switchbag_info_text_content">
                <p>「Nintendo Switch」主機專用便攜包和螢幕保護貼組合。內有可放5張遊戲卡
                    及2條「Joy-Con腕帶」的收納位置。也可竪立主機當作支架使用。</p>
            </div>
            <div class="switchbag_info_text_content">
                <span>※不包含「Nintendo Switch主機」及「Joy-Con」</span>
            </div>
        </div>
        <div id="switchbag_info_pic">
            <img src="./img/peripherals_screen/case_image-01.jpg" alt="">
        </div>

    </div>
</div>
<div id="switchlitebag_content">
    <div id="switchlitebag_title">
        <p>Nintendo Switch Lite<br>便攜包</p>
    </div>
    <div id="switchlitebag_info">
        <div id="switchlitebag_info_pic">
            <img src="./img/peripherals_screen/lite_case_image-01.jpg" alt="">
        </div>
        <div id="switchlitebag_info_text">
            <div class="switchlitebag_info_text_content">
                <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            </div>
            <div class="switchlitebag_info_text_content">
                <img src="./img/peripherals_screen/sup.png" width="120px" height="40px" alt="">
                <p>SwichLite</p>
            </div>
            <div class="switchlitebag_info_text_content">
                <p>「Nintendo Switch Lite」主機專用便攜包和螢幕保護貼組合。內有可放8張遊
                    戲卡的收納位置。</p>
            </div>
            <div class="switchlitebag_info_text_content">
                <span>※不包含「Nintendo Switch Lite主機」 </span>
            </div>
        </div>
    </div>
</div>
<div id="ProtectiveShell_content">
    <div id="ProtectiveShell_title">
        <p>Nintendo Switch Lite<br>掀蓋式保護殼</p>
    </div>
    <div id="ProtectiveShell_info">
        <div id="ProtectiveShell_info_text">
            <div class="ProtectiveShell_info_text_content">
                <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            </div>
            <div class="ProtectiveShell_info_text_content">
                <img src="./img/peripherals_screen/sup.png" width="120px" height="40px" alt="">
                <p>SwitchLite</p>
            </div>
            <div class="ProtectiveShell_info_text_content">
                <p>Nintendo Switch Lite主機掀蓋式保護殼和保護液晶螢幕以防受損或髒污的
                    保護貼組合。</p>
            </div>
            <div class="ProtectiveShell_info_text_content">
                <span>※不包含「Nintendo Switch Lite主機」 </span>
            </div>
        </div>
        <div id="ProtectiveShell_info_pic">
            <img src="./img/peripherals_screen/flip_case_image-01.jpg" alt="">
        </div>

    </div>
</div>
<div id="bracket_content">
    <div id="bracket_title">
        <p>Nintendo Switch<br>充電支架（轉軸式）</p>
    </div>
    <div id="bracket_info">
        <div id="bracket_info_pic">
            <img src="./img/peripherals_screen/charging-stand_image-01.jpg" alt="">
        </div>
        <div id="bracket_info_text">
            <div class="bracket_info_text_content">
                <img src="./img/peripherals_screen/83134-allstars-sprite-symmetry-entertainment-symbol-system-mario.png" width="40px"
                height="40px" alt="">
            <p>發售中</p>
            </div>
            <div class="bracket_info_text_content">
                <img src="./img/peripherals_screen/sup.png" width="120px" height="40px" alt="">
                <p>Swich / SwitchLite</p>
            </div>
            <div class="bracket_info_text_content">
                <p>自由改變Nintendo Switch主機的畫面角度，桌上模式專用支架。轉軸式讓
                    玩家可從方便的角度來玩遊戲。此外，一邊充電，一邊遊戲，無需擔心電量
                    問題。</p>
            </div>
            <div class="bracket_info_text_content">
                <span>※充電時請使用主機組合附屬的「Nintendo Switch AC變壓器」(不包含 AC變壓器)</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
@endsection

