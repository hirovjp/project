<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;

class AdminController extends Controller
{
	public function CreateProduct()
	{
		return view('admin.addProduct');
	}

    public function AddProduct(Request $request)
    {
    	$rules = [ 'image' => 'image|max:1024' ]; 
		$posts = [ 'image' => $request->file('image') ];

    	$product = new product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantily = $request->quantily;
        
		// Validator để kiểm tra
		$valid = Validator::make($posts, $rules);
		
		// Kiểm tra nếu có lỗi
		if ($valid->fails()) {
			// Có lỗi, redirect trở lại
			return redirect()->back()->withErrors($valid)->withInput();
		}
		else {
			// Ko có lỗi, kiểm tra nếu file đã dc upload
			if ($request->file('image')->isValid()) {
				// File này có thực, bắt đầu đổi tên và move
				$fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file
				
				// Filename cực shock để khỏi bị trùng
				$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
							
				// Thư mục upload
				$uploadPath = public_path('/upload'); // Thư mục upload
				
				// Bắt đầu chuyển file vào thư mục
				$request->file('image')->move($uploadPath, $fileName);
				
				// Thành công, lưu tên image vào database
				$product->image = $fileName;
			}
			else {
				// Lỗi file
				$product->image = "";
			}
		}

        $product->save();
    }

    public function EditProduct($id)
    {
    	$product = product::find($id);
    	return view('admin/updateProduct')->with(['data' => $product]);
    }

    public function UpdateProduct($id, Request $request)
    {
		$rules = [ 'image' => 'image|max:1024' ]; 
		$posts = [ 'image' => $request->file('image') ];

    	$product = product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
    	$product->quantily = $request->quantily;

		// Validator để kiểm tra
		$valid = Validator::make($posts, $rules);
		
		// Kiểm tra nếu có lỗi
		if ($valid->fails()) {
			// Có lỗi, redirect trở lại
			return redirect()->back()->withErrors($valid)->withInput();
		}
		else {
			// Ko có lỗi, kiểm tra nếu file đã dc upload
			if ($request->file('image')->isValid()) {
				// File này có thực, bắt đầu đổi tên và move
				$fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file
				
				// Filename cực shock để khỏi bị trùng
				$fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
							
				// Thư mục upload
				$uploadPath = public_path('/upload'); // Thư mục upload
				
				// Bắt đầu chuyển file vào thư mục
				$request->file('image')->move($uploadPath, $fileName);
				
				// Thành công, lưu tên image vào database
				$product->image = $fileName;
			}
			else {
				// Lỗi file
				$product->image = '';
			}
		}
        
        $product->save();
    }

    public function DeleteProduct($id)
    {
    	$product = product::find($id);
    	$product->delete();
    }


}
