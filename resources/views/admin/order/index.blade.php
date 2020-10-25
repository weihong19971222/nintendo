@extends('layouts/app2')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')


<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>訂單編號</th>
            <th>收貨人姓名</th>
            <th>聯絡電話</th>
            <th>寄送地址</th>
            <th>訂單狀態</th>
            <th>總金額</th>
            <th>收貨方式</th>
            <th>付款方式</th>
            <th>訂單建立日期</th>
            <th>訂單內容</th>
            {{-- <th>功能</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{$order->order_no}}</td>
                <td>{{$order->receive_name}}</td>
                <td>{{$order->receive_phone}}</td>
                <td>{{$order->receive_address}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->deliverymethod}}</td>
                <td>{{$order->paymentmethod}}</td>
                <td>{{$order->created_at}}</td>
                <td>
                    @foreach ($order->orderItems as $b)
                        @foreach ($test as $t)
                            @if ($t->id==$b->product_id)
                                {{-- @foreach ($t as $t1)
                                {{$t1->products_name}}

                                @endforeach --}}
                                {{$t->products_name}}
                            @endif
                        @endforeach


                        {{-- <img src="" alt=""> --}}
                        {{-- {{$b->product_id}} --}}
                    @endforeach
                </td>
                {{-- <td style="width: 100px">
                    <a href="/admin/products/{{$order->id}}/edit" class="btn btn-sm btn-secondary">編輯</a>
                    <button data-ptid="{{$order->id}}" class="btn btn-sm btn btn-danger btn-del">刪除</button>
                    <form id="del-form-{{$order->id}}" action="/admin/products/{{$order->id}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td> --}}
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

