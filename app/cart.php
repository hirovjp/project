<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";

    public function user()
    {
    	return $this->hasOne('App\User');
    }

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'product_carts', 'cart_id', 'product_id');
    }
}
