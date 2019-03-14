<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductCart;
use Auth;

class PageController extends Controller
{
    public function index()
    {
    	return view('page.index')->with(['data' => Product::all(), 'menu' => Category::all()]);
    }

    public function show($id = null)
    {
        return view('page.show_product')->with(['data' => Product::find($id), 'menu' => Category::all()]);
    }
    
    public function Search(Request $request)
    {
        $res = '';
        $key = $request->get('text'); // nhận giá trị trừ ajax gửi qua để xử lý
        // nếu text có dữ liệu thì tìm kiếm không thì trở lại ban đầu
        if ($request->get('text') !== "") {
            $data = Product::where('description', 'like', '%'.$key.'%')->orWhere('name', 'like', '%'.$key.'%')->get();
            if (count($data) === 0) {
                return response()->json(['data' => 0]);
            }
        } else {
            $data = Product::all();
        }
        // Nếu tìm thấy giá trị

        foreach ($data as $row) {
            $res .= '<li class="span3">
                <div class="product-box">
                    <span class="sale_tag"></span>
                    <p><a href="page/product/'.$row->id.'">
                    <img class="image-index" width="200px" height="200px" src="img/'.$row->image.'">
                    </a>
                    </p>
                    <a href="page/product/'.$row->id.'" class="title">'.$row->name.'</a><br/>
                    <p class="price">$'.$row->price.'</p>
                </div></li>';
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
        $cart_id = Auth::user()->cart->id;
        return view('page.showCart')->with(['data' => ProductCart::with('Product')->where('cart_id', $cart_id)->get()]);
    }
}
