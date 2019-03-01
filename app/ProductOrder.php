<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    protected $table = "product_orders";

    public function product()
    {
    	return $this->hasMany('App\Product', 'product_id', 'id');
    }

    public function order()
    {
    	return $this->hasMany('App\Order', 'order_id', 'id');
    }
}
