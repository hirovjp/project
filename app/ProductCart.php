<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    protected $table = "product_carts";

    public function Product() {
    	return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    // public function Cart() {
    // 	return $this->belongsTo('App\Product', 'cart_id', 'id');
    // }

    public function Cart()
    {
    	return $this->belongsToMany('App\Cart', 'products', 'product_id', 'cart_id');
    }
}
