@extends('layouts/app2')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<form method="POST" action="/admin/news" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="news_title">新聞title</label>
        <input name="news_title" type="text" class="form-control" id="news_title" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">上傳新聞圖片</label>
        <input name="news_img" type="file" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
    <div class="form-group">
        <label for="news_date">新聞日期</label>
        <input name="news_date" type="text" class="form-control" id="news_date" required>
    </div>
    <div class="form-group">
        <label for="news_cont">新聞內容</label><small style="color: red">(年.月.日)</small>
        <input name="news_cont" type="text" class="form-control" id="news_cont" required>
    </div>
    <div class="form-group">
        <label for="news_yt_link">新聞連結</label>
        <input name="news_yt_link" type="text" class="form-control" id="news_yt_link" required>
    </div>
    <div class="form-group">
        <label for="sort">排序</label>
        <input name="sort" type="number" class="form-control" id="sort" required>
    </div>
    {{-- <div class="form-group">
        <label for="title">產品分類</label>

            <select class="form-control" name="type_id" id="">
                @foreach ($ProductType_list as $item)
                    <option value="{{$item->id}}">{{$item->type_name}}</option>
                @endforeach
            </select>

    </div> --}}
    <button type="submit" class="btn btn-primary">送出資料</button>
</form>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#info').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete : function(target) {
                    $.delete(target[0].getAttribute("src"));
                }
            }
        });
    });

    $.upload = function (file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#info').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };

        $.delete = function (file_link) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img',
                data: {file_link:file_link},
                success: function (img) {
                    console.log("delete:",img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
</script>
@endsection
