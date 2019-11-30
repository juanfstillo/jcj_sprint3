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
    	$vac = compact('products');
    	return view('products', $vac);
    }

    public function listCatAll() {
    	$productos = Product::where("id_cat",1)->get();
    	$brands = $productos->map(function($prod){
    		return $prod->brand;
    	})->unique();

    	$productos = Product::where("id_cat",2)->get();
    	$brands = $productos->map(function($prod){
    		return $prod->brand;
    	})->unique();

    	//dd ($brands);

    	$vac = compact("productos","brands");
    	return view ("/products", $vac);
    }

    public function productCatAll() {
    	$productos = Product::where("id_cat",1)->get();
    	$categorias = $productos->map(function($prod){
    		return $prod->cat;
    	})->unique();

    	//dd ($brands);

    	$vac = compact("productos","categorias");
    	return view ("/products", $vac);
    }

 }


