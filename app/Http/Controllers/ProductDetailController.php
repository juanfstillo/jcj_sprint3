<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductDetailController extends Controller
{
    public function index() {
    	$productdetail = Product::all();

   // $vac = compact("productdetail=>$productdetail");
    return view ("/productdetail", [
    	'productdetail'=>$productdetail

    	]);
    }
}
