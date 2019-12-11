<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductInCart extends Model
{
  public $table = 'products_in_cart';
  public $primaryKey = ['product_id', 'user_id'];
  public $incrementing = false;

  public function product() {
    return $this->belongsTo('App\Product');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

  protected function setKeysForSaveQuery(Builder $query) {
      return $query->where('user_id', $this->getAttribute('user_id'))
          ->where('product_id', $this->getAttribute('product_id'));
  }
}
