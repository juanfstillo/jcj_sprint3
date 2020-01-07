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
    public function abm(){
    $category = Category::all();
    $vac = compact("category");
    return view ("/categoriesabm", $vac);
  }

  public function AddCategory(Request $req)  {
    if(!empty($req["file"])){
      $path = $req->file("file")->store("public");
      $imageCategory = basename($path);
      $imageCategory = "storage/" . $imageCategory;
    } else {
      $imageCategory = null;
    }
    $newCategory = new Category;
    $newCategory->imageUrl=$imageCategory;
    $newCategory->name= $req["name"];
    $newCategory->slug= $req["slug"];
    $newCategory->save();
  return redirect ("/categoriesabm");
  }

  public function showEdit($id_category){
    $category = Category::find($id_category);
    $vac = compact("category");
    return view ("/edit_category", $vac);
  }

  public function edit($id_category, Request $req)  {
    $category = Category::find($id_category);
    if(!empty($req["file"])){
      $path = $req->file("file")->store("public");
      $imageCategory = basename($path);
      $imageCategory = "storage/" . $imageCategory;
      $category->imageUrl= $imageCategory;
    }
    $category = new Category;
    $category->imageUrl=$imageCategory;
    $category->name= $req["name"];
    $category->slug= $req["slug"];
    $category->save();
  return redirect ("/categoriesabm");
  }

  public function deleteCategory($id_category)  {
  $category = Category::where("id", "=", $id_category)->delete();
  return redirect ("categoriesabm");
  }
}
