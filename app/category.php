<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "categories";

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'product_categories', 'category_id', 'product_id');
    }
}
