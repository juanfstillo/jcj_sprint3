<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductInOrder extends Model
{
    public $table = 'orders_products';
    public $primaryKey = ['order_id', 'product_id'];
    public $incrementing = false;

    public function product() {
        return $this->belongsTo('App\Product');
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        return $query->where('order_id', $this->getAttribute('order_id'))
            ->where('product_id', $this->getAttribute('product_id'));
    }
}
