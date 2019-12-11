<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function productsInOrder() {
      return $this->hasMany('App\ProductInOrder', 'order_id');
    }
}
