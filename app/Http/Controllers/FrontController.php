<?php

namespace App\Http\Controllers;

use App\Amiibo;
use App\GameSoftwas;
use App\News;
use App\Products;
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
        $news=News::all();
        return view('/front/index',compact('news'));
    }
    public function support(){
        return view('/front/support');
    }
    public function service(){
        return view('/front/service_screen');
    }
    public function news(){
        $news=News::paginate(6);
        return view('/front/news',compact('news'));
    }
    public function news_info($news_id){
        $news_list=News::where('id','=',$news_id)->first();
        return view('front/news_info', compact('news_list'));
    }
    public function thds(){
        return view('/front/3ds_screen');
    }
    public function amiibo(){
        $amiibos=Amiibo::all();
        return view('/front/amiibo_screen',compact('amiibos'));
    }
    public function store_main(){
        $hosts=Products::where('products_type','host')->get();
        $controllers=Products::where('products_type','controller')->get();
        $amiibos=Products::where('products_type','amiibo')->get();
        $chargers=Products::where('products_type','charger')->get();
        $others=Products::where('products_type','other')->get();
        return view('/front/store_main',compact('hosts','controllers','amiibos','chargers','others'));
    }
    public function store_page_host(){
        $hosts=Products::where('products_type','host')->get();
        return view('/front/store_page_host',compact('hosts'));
    }
    public function store_page_controller(){
        $controllers=Products::where('products_type','controller')->get();
        return view('/front/store_page_controller',compact('controllers'));
    }
    public function store_page_amiibo(){
        $amiibos=Products::where('products_type','amiibo')->get();
        return view('/front/store_page_amiibo',compact('amiibos'));
    }
    public function store_page_charger(){
        $chargers=Products::where('products_type','charger')->get();
        return view('/front/store_page_charger',compact('chargers'));
    }
    public function store_page_other(){
        $others=Products::where('products_type','other')->get();
        return view('/front/store_page_other',compact('others'));
    }
    public function store_content($id){
        $products=Products::find($id);
        return view('/front/store_content',compact('products'));
    }
    public function peripherals(){
        return view('/front/peripherals_screen');
    }
    public function member_login(){
        return view('/front/member_login');
    }
    public function member_center(){
        return view('/front/member_center');
    }
    public function member_create(){
        return view('/front/member_create');
    }
}
