<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\product_order;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function data()
    {
        $data = product::find(1)->category()->toArray();
        var_dump($data);
    }

}
