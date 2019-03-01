<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    protected $table = "product_order";

    public function product()
    {
    	return $this->belongsTo('App\product', 'product', 'id');
    }

    public function order()
    {
    	return $this->belongTo('App\order', 'order_id', 'id');
    }
}
