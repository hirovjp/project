<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "order";

    public function product_order()
    {
    	return $this->hasMany('App\product_order', 'order_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
