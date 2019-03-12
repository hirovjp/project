<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'product_categories', 'category_id', 'product_id');
    }

    public function product_category() {
    	return $this->hasMany('App\Product_category', 'category_id', 'id');
    }
}
