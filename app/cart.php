<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "cart";

    public function User()
    {
    	return $this->belongsTo('App\User', 'foreign_key');
    }

    public function product_cart()
    {
    	return $this->hasMany('App\product_cart', 'cart_id', 'id');
    }
}
