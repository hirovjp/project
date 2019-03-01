<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";

    public function product_order()
    {
    	return $this->belongsTo('App\ProductOrder', 'order_id', 'id');
    }

    public function user()
    {
    	return $this->hasMany('App\User', 'user_id', 'id');
    }
}
