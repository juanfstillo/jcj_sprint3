<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $req, $productSlug) {
        $product = Product::where('slug', $productSlug)->first();

        return view('product', [
            'product' => $product
        ]);
    }
}
