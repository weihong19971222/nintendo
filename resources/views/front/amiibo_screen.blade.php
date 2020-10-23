@extends('layouts/nav_footer')
@section('title_name')
Amiibo
@endsection
@section('css')
<link rel="stylesheet" href="./css/amiibo.css">
@endsection
@section('cont')
     <div class="container">
        <div id="amiibo_logo" class="mt-3 d-flex justify-content-center w-100">
            <img class="w-100" src="./img/amiibo_screen/amiibo_banner.jpg" alt="">
        </div>
        <div id="amiibo_howtoplay" class="d-flex justify-content-center w-100">
            <img class="w-100" src="./img/amiibo_screen/amiibo_htp.jpg" alt="">
        </div>
        <div id="amiibo_cont" class="w-100">
            <div class="row">
                <div data-name="animal" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Animal.png" alt="">
                </div>
                <div data-name="mario" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Mario.png" alt="">
                </div>
                <div data-name="pokemon" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Pokemon.png" alt="">
                </div>
            </div>
            <div class="row">
                <div data-name="star" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Star.png" alt="">
                </div>
                <div data-name="shovelknight" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/ShovelKnight.png" alt="">
                </div>
                <div data-name="rockman" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Rockman.png" alt="">
                </div>
            </div>
            <div class="row">
                <div data-name="fireeMblem" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/FireeMblem.png" alt="">
                </div>
                <div data-name="splatoon" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Splatoon.png" alt="">
                </div>
                <div data-name="zelda" data-toggle="modal" data-target=".bd-example-modal-xl" class="a_btn col-4 col_height d-flex justify-content-center align-items-center">
                  <img src="./img/amiibo_screen/Zelda.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <div class="row">

                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
@endsection
@section('js')
    <script src="./js/amiibo_screen.js"></script>
    <script>
        $(".a_btn").click(function(){
            $(".container-fluid .row").html("");
            switch ($(this).attr("data-name")) {
                case "animal":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="animal")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "mario":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="mario")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "pokemon":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="pokemon")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "star":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="star")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "shovelknight":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="shovelknight")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "rockman":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="rockman")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "fireeMblem":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="fireeMblem")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "splatoon":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="splatoon")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                case "zelda":
                    $(".container-fluid .row").html(`
                    @foreach ($amiibos as $amiibo)
                            @if ($amiibo->amiibo_type=="zelda")
                                <div class="col-4"><img class="w-100" src="{{$amiibo->amiibo_image}}" alt=""><p>{{$amiibo->amiibo_name}}</p></div>
                            @endif
                          @endforeach
                    `);
                    break;
                default:
                    break;
            }
        });
    </script>
@endsection





