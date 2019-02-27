<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";

    public function product_category()
    {
    	return $this->hasMany('App\product_category', 'product_id', 'id');
    }

    public function product_cart()
    {
    	return $this->hasMany('App\product_cart', 'product_id', 'id');
    }

    public function product_order()
    {
    	return $this->hasMany('App\product_order', 'product_id', 'id');
    }
}
