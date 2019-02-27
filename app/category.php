<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";

    public function product_category()
    {
    	return $this->hasMany('App\product_category', 'category_id', 'id');
    }
}
