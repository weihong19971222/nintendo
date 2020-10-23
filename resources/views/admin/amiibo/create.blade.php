@extends('layouts/app2')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<form method="POST" action="/admin/amiibo" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="amiibo_name">Amiibo名稱</label>
        <input name="amiibo_name" type="text" class="form-control" id="amiibo_name" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">上傳Amiibo圖片</label>
        <input name="amiibo_image" type="file" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
    <div class="form-group">
        <label for="amiibo_type">Amiibo分類</label>
        <select class="form-control" name="amiibo_type" id="amiibo_type">
            <option value="animal">動物之森</option>
            <option value="mario">馬力歐</option>
            <option value="pokemon">寶可夢</option>
            <option value="star">卡比之星</option>
            <option value="shovelknight">鏟子騎士</option>
            <option value="rockman">任天堂明星大亂鬥</option>
            <option value="fireeMblem">風花雪月</option>
            <option value="splatoon">漆彈大作戰</option>
            <option value="zelda">薩爾達</option>
        </select>
    </div>
    <div class="form-group">
        <label for="sort">排序</label>
        <input name="sort" type="number" class="form-control" id="sort" required>
    </div>

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
