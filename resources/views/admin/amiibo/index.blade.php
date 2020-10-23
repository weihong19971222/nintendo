@extends('layouts/app2')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<a class="btn btn-info mb-3" href="/admin/amiibo/create">新增Amiibo</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Amiibo名稱</th>
            <th>Amiibo圖片</th>
            <th>Amiibo類別</th>
            <th>排序</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($amiibos as $amiibo)

            <tr>
                <td>{{$amiibo->amiibo_name}}</td>
                <td><img width="100px" src="{{$amiibo->amiibo_image}}" alt=""></td>
                <td>
                @switch($amiibo->amiibo_type)
                    @case("animal")
                        動物之森
                        @break
                    @case("mario")
                        馬力歐
                        @break
                    @case("pokemon")
                        寶可夢
                        @break
                    @case("star")
                        卡比之星
                        @break
                    @case("shovelknight")
                        鏟子騎士
                        @break
                    @case("rockman")
                        任天堂明星大亂鬥
                        @break
                    @case("fireeMblem")
                        風花雪月
                        @break
                    @case("splatoon")
                        漆彈大作戰
                        @break
                    @case("zelda")
                        薩爾達
                        @break
                    @default

                @endswitch
                </td>
                <td>{{$amiibo->sort}}</td>
                <td style="width: 100px">
                    <a href="/admin/amiibo/{{$amiibo->id}}/edit" class="btn btn-sm btn-secondary">編輯</a>
                    <button data-ptid="{{$amiibo->id}}" class="btn btn-sm btn btn-danger btn-del">刪除</button>
                    <form id="del-form-{{$amiibo->id}}" action="/admin/amiibo/{{$amiibo->id}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#example').on("click",".btn-del",function(){
                var r=confirm("確認是否刪除");
                if(r==true){
                    $("#del-form-"+$(this).attr('data-ptid')).submit();
                }
            });
        } );
    </script>
@endsection

