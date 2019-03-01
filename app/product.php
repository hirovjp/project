<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";

    public function cart()
    {
    	return $this->belongsToMany('App\Product', 'carts', 'product_id', 'cart_id');
    }

    public function category()
    {
    	return $this->belongsToMany('App\Category', 'categories', 'category_id', 'product_id');
    }

    public function product_order()
    {
    	return $this->belongsTo('App\ProductOrder', 'product_id', 'id');
    }
}
