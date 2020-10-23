<?php

namespace App\Http\Controllers;

use App\GameSoftwas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamesoftwas=GameSoftwas::all();
        return view('admin/game/index',compact('gamesoftwas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gamesoftwas=GameSoftwas::all();
        return view('admin/game/create',compact('gamesoftwas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_data=$request->all();
        if($request->hasFile('game_image')) {
            $file = $request->file('game_image');
            $path = $this->fileUpload($file,'game_softwas');
            $request_data['game_image'] = $path;
        }
        GameSoftwas::create($request_data);
        return redirect('admin/game');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gamesoftwas=GameSoftwas::find($id);
        return view('admin/game/edit',compact('gamesoftwas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gamesoftwas=GameSoftwas::find($id);
        $request_data=$request->all();
        if($request->hasFile('game_image')) {
            $old_image = $gamesoftwas->game_image;
            File::delete(public_path().$old_image);
            $file = $request->file('game_image');
            $path = $this->fileUpload($file,'game_softwas');
            $request_data['game_image'] = $path;
        }
        $gamesoftwas->update($request_data);
        return redirect('admin/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamesoftwas=GameSoftwas::find($id);
        $old_image = $gamesoftwas->game_image;
        File::delete(public_path().$old_image);
        GameSoftwas::destroy($id);
        return redirect('admin/game');
    }
    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }
}
