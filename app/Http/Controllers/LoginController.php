<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function load(Request $request)
    {
        $data = [
        	'email' => $request->email,
        	'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
        	
        } else {

        }
    }

    public function register(Request $request)
    {
    	$data = [
        	'email' => $request->email,
        	'password' => $request->password_1,
        ];

        if (Auth::attempt($data)) {
        	
        } else {

        }
    }

    public function logout()
    {
    	Auth::logout();
    }
}
