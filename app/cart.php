<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "carts";

    public function user()
    {
    	return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'product_carts', 'cart_id', 'product_id');
    }
}
