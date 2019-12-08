<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Brand;
use App\Category;

class CategoryController extends Controller
{

	//Obtenemos toda la categoria
    public function index($slug) {
    	$category = Category::where('slug', $slug)->first();

    	// La metemos en una vista
    	return view('category', [
    		'category'=>$category
		]);
	}



}
