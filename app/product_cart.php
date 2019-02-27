<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cart extends Model
{
    protected $table = "product_cart";

    public function product()
    {
    	return $this->belongsTo('App\product', 'product_id', 'id');
    }

    public function cart()
    {
    	return $this->belongsTo('App\cart', 'cart_id', 'id');
    }
}
