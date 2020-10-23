@extends('layouts/nav_footer')
@section('title_name')
Nintendo Switch支援
@endsection
@section('css')
<link rel="stylesheet" href="./css/support.css">
@endsection
@section('cont')
<div id="title">
    <p>Nintendo Switch支援</p>
</div>
<div id="search">
    <div id="search_cloud1">
        <img id="c1" src="./img/support_screen/c2.png" width="100%" alt="">
        <img id="c2" src="./img/support_screen/c1.png" width="100%" alt="">
    </div>
    <div id="search_center">
        <img id="t1" data-toggle="modal" data-target="#exampleModalCenter2"
            src="./img/support_screen/searchhhhhhh.png" width="100%" alt="">
        <img id="t2" src="./img/support_screen/think.png" width="40px" alt=""><br>
        <img id="t3" src="./img/support_screen/think2.png" width="40px" alt=""><br>
        <img id="t4" src="./img/support_screen/think3.png" width="40px" alt=""><br>
        <img src="./img/support_screen/mario3.png" width="200px" height="50%" alt="">

    </div>
    <div id="search_cloud2">
        <img id="c4" src="./img/support_screen/c2.png" width="100%" alt="">
        <img id="c3" src="./img/support_screen/c1.png" width="100%" alt="">
    </div>
</div>
<!-- 使用方法Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">使用方法</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ripbdd_IZXk" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="bricks"></div>
<div id="sup">
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl">
        <img src="./img/support_screen/1.png" width="150px" height="150px" alt="">
        <p>充電方法</p>
    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl2">
        <img src="./img/support_screen/2.png" width="150px" height="150px" alt="">
        <p>遊戲模式及連線方法</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl3">
        <img src="./img/support_screen/3.png" width="150px" height="150px" alt="">
        <p>控制器的準備</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl4">
        <img src="./img/support_screen/4.png" width="150px" height="150px" alt="">
        <p>利用NS來玩的軟體</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl5">
        <img src="./img/support_screen/5.png" width="150px" height="150px" alt="">
        <p>網路連接</p>

    </div>

    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl6">
        <img src="./img/support_screen/6.png" width="150px" height="150px" alt="">
        <p>用戶</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl7">
        <img src="./img/support_screen/7.png" width="150px" height="150px" alt="">
        <p>朋友</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl8">
        <img src="./img/support_screen/8.png" width="150px" height="150px" alt="">
        <p>監護人設定的使用限制</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl9">
        <img src="./img/support_screen/9.png" width="150px" height="150px" alt="">
        <p>資料管理</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl10">
        <img src="./img/support_screen/10.png" width="150px" height="150px" alt="">
        <p>使用者轉移及儲存資料轉移</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl11">
        <img src="./img/support_screen/11.png" width="150px" height="150px" alt="">
        <p>Nintendo Shop</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl12">
        <img src="./img/support_screen/12.png" width="150px" height="150px" alt="">
        <p>NS周邊設備</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl13">
        <img src="./img/support_screen/13.png" width="150px" height="150px" alt="">
        <p>海外使用</p>

    </div>
    <div class="sup_box" data-toggle="modal" data-target=".bd-example-modal-xl14">
        <img src="./img/support_screen/14.png" width="150px" height="150px" alt="">
        <p>周邊設備使用注意事項</p>

    </div>
</div>

<!-- 充電方法MODEL -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">充電方法</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <img src="./img/support_screen/s1.png" width="100%" alt="">
        </div>
    </div>
</div>

    <!--MODEL -->
    <div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">遊戲模式及連線方式</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <img src="./img/support_screen/s2.png" width="100%" alt="">
        </div>
    </div>
</div>
        <!--MODEL -->
        <div class="modal fade bd-example-modal-xl3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">控制器的準備</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <img src="./img/support_screen/s3.png" width="100%" alt="">
            </div>
        </div>
    </div>

            <!--MODEL -->
            <div class="modal fade bd-example-modal-xl4" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">利用NS來玩的軟體</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s4.png" width="100%" alt="">
                </div>
            </div>
        </div>

                       <!--MODEL -->
                       <div class="modal fade bd-example-modal-xl5" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                       aria-hidden="true">
                       <div class="modal-dialog modal-xl">

                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">網路連接</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <img src="./img/support_screen/s5.png" width="100%" alt="">
                           </div>
                       </div>
                   </div>

                                  <!--MODEL -->
            <div class="modal fade bd-example-modal-xl6" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">用戶</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s6.png" width="100%" alt="">
                </div>
            </div>
        </div>


                       <!--MODEL -->
                       <div class="modal fade bd-example-modal-xl7" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                       aria-hidden="true">
                       <div class="modal-dialog modal-xl">

                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">朋友</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <img src="./img/support_screen/s7.png" width="100%" alt="">
                           </div>
                       </div>
                   </div>

                                  <!--MODEL -->
            <div class="modal fade bd-example-modal-xl8" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">監護人設定的使用限制</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s8.png" width="100%" alt="">
                </div>
            </div>
        </div>


                       <!--MODEL -->
                       <div class="modal fade bd-example-modal-xl9" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                       aria-hidden="true">
                       <div class="modal-dialog modal-xl">

                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">資料管理</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <img src="./img/support_screen/s9.png" width="100%" alt="">
                           </div>
                       </div>
                   </div>

                                  <!--MODEL -->
            <div class="modal fade bd-example-modal-xl10" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">使用者轉移及儲存資料轉移</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s10.png" width="100%" alt="">
                </div>
            </div>
        </div>


                       <!--MODEL -->
                       <div class="modal fade bd-example-modal-xl11" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                       aria-hidden="true">
                       <div class="modal-dialog modal-xl">

                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Nintendo Shop</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <img src="./img/support_screen/s11.png" width="100%" alt="">
                           </div>
                       </div>
                   </div>

                                  <!--MODEL -->
            <div class="modal fade bd-example-modal-xl12" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">NS周邊設備</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s12.png" width="100%" alt="">
                </div>
            </div>
        </div>


                       <!--MODEL -->
                       <div class="modal fade bd-example-modal-xl13" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                       aria-hidden="true">
                       <div class="modal-dialog modal-xl">

                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">海外使用</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <img src="./img/support_screen/s13.png" width="100%" alt="">
                           </div>
                       </div>
                   </div>

                                  <!--MODEL -->
            <div class="modal fade bd-example-modal-xl14" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">周邊設備使用注意事項</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img src="./img/support_screen/s14.png" width="100%" alt="">
                </div>
            </div>
        </div>
@endsection



@section('js')

@endsection
