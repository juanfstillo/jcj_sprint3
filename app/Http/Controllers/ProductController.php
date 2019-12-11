<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $req, $categorySlug, $productSlug) {
        $product = Product::where('slug', $productSlug)->first();

        return view('product', [
            'product' => $product
        ]);
    }
}
