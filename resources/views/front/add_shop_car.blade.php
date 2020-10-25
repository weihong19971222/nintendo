
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Add_shop_car</title>
    <link rel="stylesheet" href="./css/add_shop_car.css">
</head>
<body>
    <div id="process_group">
        <div class="process">
            <img src="./img/add_shop_car/800x_0000_.png"  width="60%"   alt="">
            <p>會員登入</p>
        </div>
        <div class="process_arrow">
            <img src="./img/add_shop_car/right-arrow.png" width="100%" alt="">
        </div>
        <div class="process">
            <img src="./img/add_shop_car/800x_0001_.png"  width="60%"  alt="">
            <p>加入購物車</p>
        </div>
        <div class="process">
            <img src="./img/add_shop_car/800x_0005_.png" width="60%"   alt="">
            <p>填寫訂單</p>
        </div>

        <div class="process">
            <img src="./img/add_shop_car/800x_0002_.png"  width="60%"   alt="">
            <p>運送及付款方式</p>
        </div>

        <div class="process">
            <img src="./img/add_shop_car/success.png"  width="60%"   alt="">
            <p>訂單完成</p>
        </div>
    </div>

    <div id="title">
        <div id="name">
            <p>商品名稱</p>
        </div>
        <div id="price">
            <p>售價</p>
        </div>
        <div id="number">
            <p>數量</p>
        </div>
        <div id="total_price">
            <p>結帳金額</p>
        </div>
        <div id="del"></div>
    </div>
@foreach ($contents as $content)
<div class="title_info">
    <div class="name_info">
        <img src="{{$content->attributes->image}}" width="100px" alt="">
        <p>{{$content->name}}</p>
    </div>
    <div class="price_info">
        <p>NT${{$content->price}}</p>
    </div>
    <div class="number_info">
        <input class="product_qty" data-productid="{{$content->id}}" type="number" min="0" step="1" name="" id="buy_number" value="{{$content->quantity}}">
    </div>
    <div class="total_price_info">
        <p>NT${{$content->price*$content->quantity}}</p>
    </div>
    <div class="del_info" data-productid="{{$content->id}}">
        <p>移除</p>
    </div>
</div>

@endforeach


    <div id="settlement">
        <div id="settlement_check">
            <div id="all_total">
                <p>共{{$cartTotalQuantity}}件，小計</p>
                <p>NT${{$total}}</p>
            </div>
            <div id="car_total">
                <p>運費</p>
                <p>NT$0</p>
            </div>
            <div id="should_pay_total">
                <p>應付總金額</p>
                <p>NT${{$total}}</p>
            </div>
            <div id="next">
               <a href="/order"> <div id="next_btn">
                    <p>下一步</p>
                </div></a>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>


<script>
    $('.product_qty').on('change', function() {
        // console.log("onchangeValue:",this.value);
        // console.log("onchangeProductID:",this.getAttribute("data-productid"));
        var new_qty = this.value;
        var product_id = this.getAttribute("data-productid");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/changeProductQty',
            data: {
                product_id:product_id,
                new_qty:new_qty
            },
            success: function (res) {
                document.location.reload(true);
                console.log(res);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });



    $('.del_info').on('click', function() {
        var product_id = this.getAttribute("data-productid");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/DelProduct',
            data: {
                product_id:product_id,
            },
            success: function (res) {
                document.location.reload(true);
                console.log(res);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });
</script>
