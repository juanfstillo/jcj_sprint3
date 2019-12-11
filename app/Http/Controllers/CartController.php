<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInCart;
use Auth;

class CartController extends Controller
{
    public function index() {
        return view('cart');
    }

    public function addProduct(Request $req, $productId) {
        $userId = Auth::user()->id;
        $productInCart = ProductInCart::where('product_id', $productId)
            ->where('user_id', $userId)
            ->first();

        if ($productInCart) {
            $productInCart->count = $productInCart->count + $req->count;
        } else {
            $productInCart = new ProductInCart();
            $productInCart->product_id = $req->product_id;
            $productInCart->count = $req->count;
            $productInCart->user_id = $userId;
        }

        $productInCart->save();
        return redirect()->route('cart');
    }

    public function removeProduct(Request $req, $productId) {
        $userId = Auth::user()->id;
        ProductInCart::where('product_id', $productId)
            ->where('user_id', $userId)
            ->delete();

        return redirect()->route('cart');
    }
}
