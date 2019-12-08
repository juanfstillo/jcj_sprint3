<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function brands(){
    return $this->hasMany("App\Brand", "id_brand");
	}
}
