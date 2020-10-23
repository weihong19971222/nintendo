@extends('layouts/app2')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<form method="POST" action="/admin/game" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="game_name">遊戲名稱</label>
        <input name="game_name" type="text" class="form-control" id="game_name" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">上傳遊戲圖片</label>
        <input name="game_image" type="file" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
    <div class="form-group">
        <label for="publisher">發行商</label>
        <input name="publisher" type="text" class="form-control" id="publisher" required>
    </div>
    <div class="form-group">
        <label for="language_chinese">是否支援中文</label>
        <select class="form-control" name="language_chinese" id="language_chinese">
                <option value="1">是</option>
                <option value="2">否</option>
        </select>
    </div>
    <div class="form-group">
        <label for="date">上架日期</label><small style="color: red">(年.月.日)</small>
        <input name="date" type="text" class="form-control" id="date" required>
    </div>
    <div class="form-group">
        <label for="classification">分級</label>
        <select class="form-control" name="classification" id="classification">
            <option value="./img/game/universal.png">普遍級</option>
            <option value="./img/game/protection.png">保護級</option>
            <option value="./img/game/12p.png">輔12級</option>
            <option value="./img/game/15p.png">輔15級</option>
            <option value="./img/game/restricted.png">限制級</option>
        </select>
    </div>
    <div class="form-group">
        <label for="version">加入精選遊戲</label><br>
        <select class="form-control" name="version" id="version">
            <option value="1">是</option>
            <option value="2">否</option>
        </select>
    </div>
    <div class="form-group">
        <label for="game_type">遊戲分類</label>
        <select class="form-control" name="game_type" id="game_type">
            <option value="1">Nintendo發行遊戲</option>
            <option value="2">第三方發行遊戲</option>
        </select>
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
