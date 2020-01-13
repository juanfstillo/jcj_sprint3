<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
