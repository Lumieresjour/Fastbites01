<?php
namespace App\Services\Feature;

use App\Models\Feature\Order;
use App\Models\Feature\OrderDetail;
use App\Repositories\CrudRepositories;
use Illuminate\Support\Str;

class CheckoutService{

    protected $order,$ordeDetail;
    protected $cartService;
    public function __construct(Order $order,OrderDetail $orderDetail,CartService $cartService)
    {
        $this->order = new CrudRepositories($order);
        $this->orderDetail = new CrudRepositories($orderDetail);
        $this->cartService = $cartService;
    }

    public function process($request)
    {
        $userCart = $this->cartService->getUserCart();
        $subtotal =  $userCart->sum('total_price_per_product');
        
        // Hitung diskon point (1 point = 1000)
        $point_used = isset($request['point_used']) ? (int)$request['point_used'] : 0;
        $point_discount = $point_used * 1000;
        
        // Pastikan diskon tidak melebihi subtotal
        if ($point_discount > $subtotal) {
            $point_discount = $subtotal;
            $point_used = floor($subtotal / 1000);
        }
        
        $total_pay = $subtotal - $point_discount + $request['shipping_cost']; 
        
        $dataOrder = [
            'invoice_number' => strtoupper(Str::random('6')),
            'total_pay' => $total_pay,
            'recipient_name' => $request['recipient_name'],
            'destination' =>  $request['city_id'] . ', ' . $request['province_id'] ,
            'address_detail' => $request['address_detail'],
            'courier' => $request['courier'],
            'subtotal' => $subtotal,
            'shipping_cost' => $request['shipping_cost'],
            'shipping_method' => $request['shipping_method'],
            'total_weight' => $request['total_weight'],
            'point_used' => $point_used,
            'point_discount' => $point_discount,
            'status' => 0,
            'user_id' => auth()->user()->id
        ];
        
        $orderStore = $this->order->store($dataOrder);
        
        foreach($userCart as $cart){
            $this->orderDetail->store([
                'order_id' => $orderStore->id,
                'product_id' => $cart->product_id,
                'qty' => $cart->qty
            ]);
        }
        
        // Update point user (kurangi point yang digunakan, tambah 5 point bonus)
        $user = auth()->user();
        $user->point = $user->point - $point_used + 5;
        $user->save();
        
        $this->cartService->deleteUserCart();
    }

}