<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $req, $slug) {
        $category = Category::where('slug', $slug)->first();
        return view('category', [
            'category' => $category
        ]);
    }
}
