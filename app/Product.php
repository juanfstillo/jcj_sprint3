<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $table = 'products';
	public $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];

	public function cat() {
		return $this->belongsTo("App\Cat", "id_cat");
	}

	public function brand() {
		return $this->belongsTo("App\Brand", "id_brand");
	}
}


