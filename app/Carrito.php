<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = "shop_cart";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function prods(){
    return $this->hasMany("App\Carrito", "id");
	}
}





