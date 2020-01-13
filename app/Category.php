<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    public function products() {
        return $this->hasMany('App\Product');
    }
}
