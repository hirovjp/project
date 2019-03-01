<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "users";

    public function cart()
    {
    	return $this->hasOne('App\Cart', 'user_id', 'id');
    }

    public function order()
    {
    	return $this->belongsTo('App\Order', 'user_id', 'id');
    }

    public function role()
    {
    	return $this->hasMany('App\Role', 'role_id', 'id');
    }
}
