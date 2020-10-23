<?php

namespace App\Http\Controllers;

use App\Amiibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AmiiboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amiibos=Amiibo::all();
        return view('admin/amiibo/index',compact('amiibos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amiibos=Amiibo::all();
        return view('admin/amiibo/create',compact('amiibos'));
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
        if($request->hasFile('amiibo_image')) {
            $file = $request->file('amiibo_image');
            $path = $this->fileUpload($file,'amiibo');
            $request_data['amiibo_image'] = $path;
        }
        Amiibo::create($request_data);
        return redirect('admin/amiibo');
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
        $amiibos=Amiibo::find($id);
        return view('admin/amiibo/edit',compact('amiibos'));
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
        $amiibos=Amiibo::find($id);
        $request_data=$request->all();
        if($request->hasFile('amiibo_image')) {
            $old_image = $amiibos->amiibo_image;
            File::delete(public_path().$old_image);
            $file = $request->file('amiibo_image');
            $path = $this->fileUpload($file,'amiibo');
            $request_data['amiibo_image'] = $path;
        }
        $amiibos->update($request_data);
        return redirect('admin/amiibo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamesoftwas=Amiibo::find($id);
        $old_image = $gamesoftwas->amiibo_image;
        File::delete(public_path().$old_image);
        Amiibo::destroy($id);
        return redirect('admin/amiibo');
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
