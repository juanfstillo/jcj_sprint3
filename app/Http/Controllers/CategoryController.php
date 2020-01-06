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
    if(!empty($req["imageUrl"])){
      $path = $req->file("imageUrl")->store("public");
      $imageProduct = basename($path);
      $imageProduct = "storage/" . $imageProduct;
    } else {
      $imageProduct = null;
    }
    $newCategory = new Category;
    $newCategory->imageUrl=$imageProduct;
    $newCategory->name= $req["name"];
    $newCategory->slug= $req["slug"];
    $newCategory->save();
  return redirect ("/categoriesabm");
  }
  public function delete($id_category)  {
  $category = Category::where("id", "=", $id_category)
  ->delete();
  return redirect ("categoriesabm");
  }
}

//funciones para el ABM
    // public function indexabm()
    // {
    //     $category = Category::latest()->paginate(5);
    //     return view('categoriesabm.indexabm',compact('category'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }
    //
    // public function create()
    // {
    //     return view('categoriesabm.create');
    // }
    //
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'slug' => 'required',
    //     ]);
    //
    //     category::create($request->all());
    //     return redirect()->route('categoriesabm.index')->with('success','category created successfully.');
    // }
    //
    // public function show(category $category)
    // {
    //     return view('categoriesabm.show',compact('category'));
    // }
    //
    //
    // public function edit(category $category)
    // {
    //     return view('categoriesabm.edit',compact('category'));
    // }
    //
    // public function update(Request $request, category $category)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'slug' => 'required',
    //     ]);
    //
    //     $category->update($request->all());
    //     return redirect()->route('categoriesabm.index')->with('success','category updated successfully.');
    // }
    //
    //
    // public function destroy(category $category)
    // {
    //     $category->delete();
    //     return redirect()->route('categoriesabm.index')->with('success','category deleted successfully.');
    // }
