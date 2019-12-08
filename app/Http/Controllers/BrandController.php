<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class BrandController extends Controller
{
     public function index() {
    	$categorias = Category::all();
    	$brand = Brand::all();

    	$vac = compact('categorias', 'brand');
    	return view('/brand', $vac);
    }
}
