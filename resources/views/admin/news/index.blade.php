@extends('layouts/app2')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<a class="btn btn-info mb-3" href="/admin/news/create">新增新聞</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>新聞title</th>
            <th>新聞圖片</th>
            <th>新聞日期</th>
            <th>新聞內容</th>
            <th>新聞連結</th>
            <th>排序</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gamesoftwas as $gamesoftwa)

            <tr>
                <td >{{$gamesoftwa->news_title}}</td>
                <td><img width="100px" src="{{$gamesoftwa->news_img}}" alt=""></td>
                <td>{{$gamesoftwa->news_date}}</td>
                <td>{{$gamesoftwa->news_cont}}</td>
                <td>{{$gamesoftwa->news_yt_link}}</td>
                <td>{{$gamesoftwa->sort}}</td>
                <td style="width: 100px">
                    <a href="/admin/news/{{$gamesoftwa->id}}/edit" class="btn btn-sm btn-secondary">編輯</a>
                    <button data-ptid="{{$gamesoftwa->id}}" class="btn btn-sm btn btn-danger btn-del">刪除</button>
                    <form id="del-form-{{$gamesoftwa->id}}" action="/admin/news/{{$gamesoftwa->id}}" method="POST" style="display: none;">
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

