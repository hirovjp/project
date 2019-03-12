<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCart;
use Auth;

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

    public function Search(Request $request)
    {
        $res = '';
        $key = $request->get('text'); // nhận giá trị trừ ajax gửi qua để xử lý
        // nếu text có dữ liệu thì tìm kiếm không thì trở lại ban đầu
        if ($request->get('text') != "") {
            $data = Product::where('description', 'like', '%'.$key.'%')->orWhere('name', 'like', '%'.$key.'%')->get();
        } else {
            $data = Product::all();
        }
        foreach ($data as $row) {
            $res .= '<a href="page/product/'.$row->id.'">
            <img src="img/'.$row->image.'">
            <br>'.
            $row->name.'
            <br>
        </a>';
        }
        return response()->json(['data' => $res]);
    }

    // Cart
    public function AddCart(Request $request)
    {
        $product_id = $request->get('id');
        $cart_id = Auth::user()->cart->id;
        $check = ProductCart::where("cart_id", '=', $cart_id)->where("product_id", '=', $product_id)->get();
        if ($product_id && count($check) == 0) {
            $cart = new ProductCart;
            $cart->cart_id = $cart_id;
            $cart->product_id = $product_id;
            $cart->quantily = 1;
            $cart->save();
        }
        $count = ProductCart::where("cart_id", '=', $cart_id)->count();
        return response()->json(['data' => $count]);
    }
    public function ShowCart()
    {
        return view('page.showCart')->with(['data' => ProductCart::with('Product')->get()]);
    }
}
