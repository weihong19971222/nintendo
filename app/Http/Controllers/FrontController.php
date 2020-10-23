<?php

namespace App\Http\Controllers;

use App\Amiibo;
use App\GameSoftwas;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function game_softwa_screen(){
        $gamesoftwas=GameSoftwas::paginate(16);
        $gamesoftwas2=GameSoftwas::where("version","=","1")->Paginate(16);
        // dd($gamesoftwas2);
        return view('/front/game',compact('gamesoftwas','gamesoftwas2'));
    }
    public function switch(){
        return view('/front/switch_screen');
    }
    public function switch_lite(){
        return view('/front/switch_lite_screen');
    }
    public function index(){
        return view('/front/index');
    }
    public function support(){
        return view('/front/support');
    }
    public function service(){
        return view('/front/service_screen');
    }
    public function thds(){
        return view('/front/3ds_screen');
    }
    public function amiibo(){
        $amiibos=Amiibo::all();
        return view('/front/amiibo_screen',compact('amiibos'));
    }
}
