<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\ProductInOrder;
use App\ProductInCart;
use Auth;

class OrdersController extends Controller
{
    public function addOrder() {
        $user = Auth::user();

        $order = new Order();
        $order->user_id = $user->id;
        $order->total = $user->cartTotal();
        $order->save();

        foreach ($user->productsInCart as $productInCart) {
            $productInOrder = new ProductInOrder();
            $productInOrder->order_id = $order->id;
            $productInOrder->product_id = $productInCart->product->id;
            $productInOrder->price = $productInCart->product->price;
            $productInOrder->count = $productInCart->count;
            $productInOrder->save();
        }

        ProductInCart::where('user_id', $user->id)->delete();

        return redirect()->route('orders');
    }
}
