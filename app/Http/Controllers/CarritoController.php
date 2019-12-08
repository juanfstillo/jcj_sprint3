<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index() {

    	$usuario = Auth::user();
      $id_user = Auth::id_user();
      $carrito = Carrito::where(“id_user”, “=”, $id_usuario)->get();

      if ($usuario == null) {
      	return redirect('/register');
      }

    

    	$vac = compact('', '');
    	return view('/carrito', $vac);
    }
}
