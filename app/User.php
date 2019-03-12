<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";
    protected $fillable = ['name', 'email', 'password', 'address', 'phone_number', 'role_id', 'remember_token'];

    public function cart()
    {
    	return $this->hasOne('App\Cart');
    }

    public function order()
    {
    	return $this->hasMany('App\Order', 'user_id', 'id');
    }

    public function role()
    {
    	return $this->belongsTo('App\Role', 'role_id', 'id');
    }
}
