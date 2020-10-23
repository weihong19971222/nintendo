@extends('layouts/nav_footer')
@section('title_name')
維修相關資訊
@endsection
@section('css')
 <link rel="stylesheet" href="./css/service_screen.css">
@endsection
@section('cont')
 <div id="service">
        <div id="service_pic">
            <img src="./img/service_screen/car.png" width="100px" height="70px" alt="">
            <div id="service_pic_text">
                <p>維</p>
                <div id="circle"></div>
            </div>
            <div id="service_pic_text">
                <p>修</p>
                <div id="circle"></div>
            </div>
            <div id="service_pic_text">
                <p>相</p>
                <div id="circle"></div>
            </div>
            <div id="service_pic_text">
                <p>關</p>
                <div id="circle"></div>
            </div>
            <div id="service_pic_text">
                <p>資</p>
                <div id="circle"></div>
            </div>
            <div id="service_pic_text">
                <p>訊</p>
                <div id="circle"></div>
            </div>
        </div>
        <div id="service_text">
            <div id="service_text1">
                <p>※
                    恕不答覆遊戲攻略相關資訊。</p>
                <p>※
                    關於任天堂商品查詢，請聯絡臺灣維修服務中心。</p>
            </div>
            <div id="service_text2">
                <h2>維修服務洽詢</h2>
            </div>
            <div id="service_text3">
                <ul>
                    <li>送修地址: 100 臺灣臺北市中正區忠孝西路一段39號3樓<br>
                        （展碁國際股份有限公司）</li>
                    <li>聯絡電話: (02)2371-6368</li>
                    <li>電話受理時間：
                        星期一至五：8:40 ~ 17:40<br>
                        (午飯時間：12:00～13:00, 國定假日及星期例假日休息)</li>
                    <li>致電前，請先在商品Q&A頁面內確認故障內容。若情況未能解決，請向維修服務中心申請維修。</li>
                    <li>請連同以下物件進行維修
                        <ol>
                            <li>需維修的主機及配件</li>
                            <li>印有銷售店舖名稱或蓋印之購買收據</li>
                            <li>主機包裝上之臺灣原裝行貨保固證</li>

                        </ol>
                    </li>
                </ul>
                <img src="./img/service_screen/tool.png" width="100px" height="100px"  data-toggle="modal" data-target=".bd-example-modal-xl">
                <p>條款說明<br>按我</p>
            </div>
            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
                      </div>
                    <div class="modal-content">
                        <img src="./img/service_screen/XXX2.png" width="100%" height="100%" alt="">
                    </div>

                </div>

            </div>



        </div>
    </div>

@endsection


@section('js')

@endsection




