<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    public function list(){
    	$products = Product::all();
        $brands = [];
    	$vac = compact('products');
    	return view('products', $vac);
    }

    public function listCatAll() {
    	$products = Product::where("id_cat",1)->get();
    	$brands = $products->map(function($prod){
    		return $prod->brand;
    	})->unique();



    	//dd ($brands);

    	$vac = compact("products","brands");
    	return view ("/products", $vac);
    }

    public function productCatAll() {
    	$products = Product::where("id_cat",1)->get();
    	$categorias = $products->map(function($prod){
    		return $prod->cat;
    	})->unique();

    	//dd ($brands);

    	$vac = compact("products","categorias");
    	return view ("/products", $vac);
    }

 }


