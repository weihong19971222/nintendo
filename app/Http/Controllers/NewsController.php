<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamesoftwas=News::all();
        return view('admin/news/index',compact('gamesoftwas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gamesoftwas=News::all();
        return view('admin/news/create',compact('gamesoftwas'));
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
        if($request->hasFile('news_img')) {
            $file = $request->file('news_img');
            $path = $this->fileUpload($file,'news');
            $request_data['news_img'] = $path;
        }
        News::create($request_data);
        return redirect('admin/news');
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
        $gamesoftwas=News::find($id);
        return view('admin/news/edit',compact('gamesoftwas'));
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
        $gamesoftwas=News::find($id);
        $request_data=$request->all();
        if($request->hasFile('news_img')) {
            $old_image = $gamesoftwas->news_img;
            File::delete(public_path().$old_image);
            $file = $request->file('news_img');
            $path = $this->fileUpload($file,'news');
            $request_data['news_img'] = $path;
        }
        $gamesoftwas->update($request_data);
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gamesoftwas=News::find($id);
        $old_image = $gamesoftwas->news_img;
        File::delete(public_path().$old_image);
        News::destroy($id);
        return redirect('admin/news');
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
