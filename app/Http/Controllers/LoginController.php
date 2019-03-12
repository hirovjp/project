<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Role;
use App\User;

class LoginController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            return redirect()->route('trangchu');
        }
    }

    public function load(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
            ],
            [
                'requireed' => ':attribute không được để trống',
                'min' => ':attribute không ít hơn :min kí tự',
                'max' => ':attribute không quá :max kí tự',
            ],
            [
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ],
        );
        if ($validate->fails()) {
            return redirect()->route('login')->withErrors($validate);
        } else {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($data)) {
                return redirect()->back();
            } else {
                return redirect()->route('login')->with('error', 'Lỗi không thể đăng nhập');
            }
        }
    }

    public function register(Request $request)
    {
    	$validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20|confirmed',
            ],
            [
                'requireed' => ':attribute không được để trống.',
                'min' => ':attribute không ít hơn :min kí tự.',
                'max' => ':attribute không quá :max kí tự.',
                'unique' => ':attribute đã tồn tại.',
                'confirmed' => ':attribute không trùng khớp.'
            ],
            [
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ],
        );
        if ($validate->fails()) {
            return view('login')->withErrors($validate);
        } else {
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'remember_token' => str_random(10),
                'role_id' => Role::where('name', 'user')->value('id'),
            ];
            $user = new User;
            $user = User::create($data);
            $user->save();
            return redirect()->back()->with('success', 'Đăng kí thành công');
        }
    }

    public function logout()
    {
    	Auth::logout();
        return redirect()->back();
    }
}
