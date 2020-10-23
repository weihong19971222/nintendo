@extends('layouts/app2')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<a class="btn btn-info mb-3" href="/admin/game/create">新增遊戲</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>遊戲名稱</th>
            <th>遊戲圖片</th>
            <th>發行商</th>
            <th>是否支援中文</th>
            <th>上架日期</th>
            <th>分級</th>
            <th>遊戲類別</th>
            <th>排序</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gamesoftwas as $gamesoftwa)

            <tr>
                <td @if($gamesoftwa->version==1) style="color:red" @endif>{{$gamesoftwa->game_name}}</td>
                <td><img width="100px" src="{{$gamesoftwa->game_image}}" alt=""></td>
                <td>{{$gamesoftwa->publisher}}</td>
                <td>@if ($gamesoftwa->language_chinese==1)
                    是
                    @else
                    否
                    @endif
                </td>
                <td>{{$gamesoftwa->date}}</td>
                <td><img width="50px" src=".{{$gamesoftwa->classification}}" alt=""></td>
                <td>
                    @if ($gamesoftwa->game_type==1)
                    Nintendo發行遊戲
                    @else
                    第三方發行遊戲
                    @endif
                </td>
                <td>{{$gamesoftwa->sort}}</td>
                <td style="width: 100px">
                    <a href="/admin/game/{{$gamesoftwa->id}}/edit" class="btn btn-sm btn-secondary">編輯</a>
                    <button data-ptid="{{$gamesoftwa->id}}" class="btn btn-sm btn btn-danger btn-del">刪除</button>
                    <form id="del-form-{{$gamesoftwa->id}}" action="/admin/game/{{$gamesoftwa->id}}" method="POST" style="display: none;">
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

