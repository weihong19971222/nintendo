<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItems;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class CartController extends Controller
{

    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }
    public function addcart(Request $request){
        $product_id=$request->product_id;
        $product = Products::find($product_id);
        $userId = auth()->user()->id;
        \Cart::session($userId)->add(
            array(
                'id' => $product_id,
                'name' => $product->products_name,
                'price' => $product->products_price,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $product->products_image,
                    'type' => $product->products_type,
                )
            ));

        $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();
         return $cartTotalQuantity;
    }
    public function add_shop_cart()
    {
        $userId = auth()->user()->id;
        $contents = \Cart::session($userId)->getContent()->sort();
        $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();
        $total = \Cart::session($userId)->getTotal();
        return view('front/add_shop_car',compact('contents','cartTotalQuantity','total'));

    }
    public function changeProductQty(Request $request)
    {
        $userId = auth()->user()->id;
        $product_id = $request->product_id;
        $new_qty=$request->new_qty;
        \Cart::session($userId)->update($product_id , array(
            'quantity' => array(
                'relative' => false,
                'value' => $new_qty
            ),
          ));

        return "suceess";

    }
    public function DelProduct(Request $request)
    {
        $userId = auth()->user()->id;
        $product_id = $request->product_id;
        \Cart::session($userId)->remove($product_id);

        return "suceess";

    }
    public function order()
    {
        $userId = auth()->user()->id;
        $contents = \Cart::session($userId)->getContent()->sort();
        return view('front/order',compact('contents'));

    }

    public function send_check_out(Request $request)
    {
        $userId = auth()->user()->id;

        $request_data = $request->all();
        $request_data["order_no"] = "20201025";
        $request_data["total_price"] = \Cart::session($userId)->getTotal();

        $new_order = Order::create($request_data);
        $new_order->order_no = 'SB87'.Carbon::now()->format('Ymd').$new_order->id;
        $new_order->save();

        $cat_contents = \Cart::session($userId)->getContent()->sort();

        $items=[];

        foreach ($cat_contents as $item) {
            $OrderItem = new OrderItems();
            $OrderItem->order_id = $new_order->id;
            $OrderItem->product_id = $item->id;
            $OrderItem->qty = $item->quantity;
            $OrderItem->price = $item->price;
            $OrderItem->save();

            $product = Products::find($item->id);
            $product_name = $product->products_name;

            $new_ary = [
                'name' => $product_name,
                'qty' => $item->quantity,
                'price' => $item->price,
                'unit' => '個'
            ];

            array_push($items, $new_ary);
        }
         //第三方支付
         $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => 'SB87'.Carbon::now()->format('Ymd').$new_order->id,
            // 'ItemName' => 'Product Name',
            // 'TotalAmount' => \Cart::getTotal(),
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        //清空購物車
        \Cart::session($userId)->clear();

        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
        // return view('front/success',compact('new_order'));

    }
    public function notifyUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {

            $order_no = $serverPost["MerchantTradeNo"];
            $order = Order::where('order_no',$order_no)->first();
            $order->status = "已完成";
            $order->save();

            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                // dd($this->checkoutResponse->collectResponse($serverPost));

                $order_no = $serverPost["MerchantTradeNo"];
                $order = Order::where('order_no',$order_no)->first();
                $order->status = "已完成";
                $order->save();
                return redirect("/success");
            }
        }
    }
    public function success(){

        return view('front.success');
   }

}
