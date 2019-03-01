<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
    	return view('page.index')->with(['data' => Product::all()]);
    }

    public function show($id = null)
    {
    	return view('page.show_product')->with(['data' => Product::find($id)]);
    }

    public function login()
    {
    	return view('login');
    }
}
