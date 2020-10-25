<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order婊單</title>
    <link rel="stylesheet" href="./css/add_shop_car.css">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="./css/order_check.css">
</head>

<body>
    <div id="process_group">
        <div class="process">
            <img src="./img/add_shop_car/800x_0000_.png"  width="60%"   alt="">
            <p>會員登入</p>
        </div>

        <div class="process">
            <img src="./img/add_shop_car/800x_0001_.png"  width="60%"  alt="">
            <p>加入購物車</p>
        </div>
        <div class="process_arrow">
            <img src="./img/add_shop_car/right-arrow.png" width="100%" alt="">
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
        <p>訂單明細</p>
    </div>
    <div id="title_name_group">
        <div class="title_name">
            <p>訂單編號</p>
        </div>
        <div class="title_name">
            <p>商品名稱</p>
        </div>
        <div class="title_name">
            <p>售價</p>
        </div>
        <div class="title_name">
            <p>數量</p>
        </div>
        <div class="title_name">
            <p>小計</p>
        </div>
    </div>

    @foreach ($contents as $item)
    <div class="content_group">
        <div class="content">
            <p>我不知道為什麼這裡要有訂單編號</p>
        </div>
        <div class="content">
            <img src="{{$item->attributes->image}}" width="30%" alt="">
            <p>{{$item->name}}</p>
        </div>
        <div class="content">
            <p>NT${{$item->price}}</p>
        </div>
        <div class="content">
            <p>{{$item->quantity}}</p>
        </div>
        <div class="content">
            <p>NT${{$item->price*$item->quantity}}</p>
        </div>
    </div>
    @endforeach

    <form action="/send_check_out" method="POST">
        @csrf
        <div id="order">
            <div id="order-top">
                <div id="order-top-left">
                    <h1>購買人資料</h1>
                    <label for="receive_name">姓名</label><br>
                    <input type="text" name="receive_name" id="receive_name" required><br>
                    <label for="receive_phone">電話</label><br>
                    <input type="text" name="receive_phone" id="receive_phone" required><br>
                    <label for="receive_address">地址</label><br>
                    <input type="text" name="receive_address" id="receive_address" required><br>
                </div>
                <div id="order-top-right">
                    <h1>收貨人資料</h1>
                    <div> <input type="checkbox" name="same_buy" id="same_buy" value="同購買人">
                        <label for="same_buy">同購買人</label><br>
                    </div>
                    <label for="get_name">姓名</label><br>
                    <input type="text" name="get_name" id="get_name" ><br>
                    <label for="get_phone">電話</label><br>
                    <input type="text" name="get_phone" id="get_phone" ><br>
                    <label for="get_address">地址</label><br>
                    <input type="text" name="get_address" id="get_address" ><br>
                </div>
            </div>
            <div id="order-bottom">
                <div id="#paysong">
                    <h1>配送及付款方式</h1>
                    <input type="radio" name="deliverymethod" checked  id="family_get" value="全家">
                    <label for="family_get">全家取貨付款</label>
                    <input type="radio" name="deliverymethod"  id="seven_get" value="711">
                    <label for="seven_get">7-11取貨付款</label>
                    <input type="radio" name="deliverymethod" id="home_get" value="宅配到府">
                    <label for="home_get">宅配到府</label>
                </div>

                <div id="#fu">
                    <h1>付款方式</h1>
                    <input type="radio" name="paymentmethod" checked  id="store_pay" value="超商取貨付款">
                    <label for="store_pay">超商取貨付款</label>
                    <input type="radio" name="paymentmethod"  id="credicard_pay" value="信用卡付款">
                    <label for="credicard_pay">信用卡付款</label>
                    <input type="radio" name="paymentmethod" id="bank_pay"  value="銀行匯款 / 轉帳">
                    <label for="bank_pay">銀行匯款 / 轉帳</label>
                </div>
            </div>
        </div>
        <div id="button">
            <a href="/add_shop_cart"><div id="prev">
                <p>上一步</p>
            </div></a>
            <a href=""><div id="next">
                <p>下一步</p>
                <button type="submit">下一步</button>
            </div></a>
        </div>
    </form>



</body>

</html>
