<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table = "product_category";

    public function category()
    {
    	return $this->belongsTo('App\category', 'category_id', 'id');
    }

    public function product()
    {
    	return $this->belongsTo('App\product', 'product_id', 'id');
    }
}
