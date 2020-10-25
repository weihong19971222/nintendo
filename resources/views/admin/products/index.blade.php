@extends('layouts/app2')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<a class="btn btn-info mb-3" href="/admin/products/create">新增商品</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>商品名稱</th>
            <th>商品圖片</th>
            <th>商品類別</th>
            <th>商品價錢</th>
            <th>商品資訊</th>
            <th>商品庫存</th>
            <th>商品上架日期</th>
            <th>排序</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->products_name}}</td>
                <td><img src="{{$product->products_image}}" width="100px" alt=""></td>
                <td>{{$product->products_type}}</td>
                <td>{{$product->products_price}}</td>
                <td>{{$product->products_info}}</td>
                <td>{{$product->products_quantity}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->sort}}</td>
                <td style="width: 100px">
                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-sm btn-secondary">編輯</a>
                    <button data-ptid="{{$product->id}}" class="btn btn-sm btn btn-danger btn-del">刪除</button>
                    <form id="del-form-{{$product->id}}" action="/admin/products/{{$product->id}}" method="POST" style="display: none;">
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

