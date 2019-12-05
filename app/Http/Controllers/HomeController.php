<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index() {
    	$categorias = Category::all();


    	return view('home', [
    		'categorias'=>$categorias
    	]);
    }


}
