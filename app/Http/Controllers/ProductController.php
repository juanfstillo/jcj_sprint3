<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index(Request $req, $categorySlug, $productSlug) {
        $product = Product::where('slug', $productSlug)->first();

        return view('product', [
            'product' => $product
        ]);
    }
    public function abm(){
    $product = Product::all();
    $vac = compact("product");
    return view ("/productsabm", $vac);
  }
  public function addProduct(Request $req)  {
    if(!empty($req["file"])){
      $path = $req->file("file")->store("public");
      $imageProduct = basename($path);
      $imageProduct = "storage/" . $imageProduct;
    } else {
      $imageProduct = null;
    }
    $newProduct = new Product;
    $newProduct->imageUrl=$imageProduct;
    $newProduct->name= $req["name"];
    $newProduct->slug= $req["slug"];
    // $newProduct->slug= $req["slug"];
    $newProduct->price= $req["price"];
    $newProduct->description= $req["description"];
    $newProduct->category_id= $req["category_id"];
    $newProduct->slug= Str::slug($req["name"]);
    $newProduct->save();
  return redirect ("/productsabm");
  }

  public function showEdit($id_product){
    $product = Product::find($id_product);
    $vac = compact("product");
    return view ("/edit_product", $vac);
  }

  public function edit($id_product, Request $req)  {
    $product = Product::find($id_product);
    if(!empty($req["file"])){
      $path = $req->file("file")->store("public");
      $imageProduct = basename($path);
      $imageProduct = "storage/" . $imageProduct;
      $product->imageUrl= $imageProduct;
    }
    $product->imageUrl=$imageProduct;
    $product->name= $req["name"];
    $product->slug= Str::slug($req["name"]);
    $product->price= $req["price"];
    $product->description= $req["description"];
    $product->category_id= $req["category_id"];
    $product->save();
  return redirect ("/productsabm");
  }
  public function deleteProduct($id_product)  {
  $product = Product::where("id", "=", $id_product)->delete();
  return redirect ("productsabm");
  }

}
