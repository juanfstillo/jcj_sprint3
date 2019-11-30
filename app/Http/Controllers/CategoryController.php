<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Brand;
use App\Category;

class CategoryController extends Controller
{
    public function productCatAll() {
    	$productos = Product::where("id_cat",1)->get();
    	$categorias = $productos->map(function($prod){
    		return $prod->cat;
    	})->unique();

    	//dd ($brands);

    	$vac = compact("categorias");
    	return view ("/products", $vac);
    }
}
