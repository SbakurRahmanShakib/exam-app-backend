<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login()
    {
        // dd('hello Form Login page');
        
        return view('Auth.login');

    }

    public function  postLogin(Request $request)
    {
    

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
           return redirect()->intended('home');
        }

        return redirect()->back();

    }

    public function apilogin(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required', 
        ]);
        $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if($user)
        {
            $token = Auth::user()->createToken('token')->plainTextToken;
            return response()->json(
                [  
                    'token' => $token,
                    'user' => Auth::user(),
                    'message' => 'Login Successfull'
                ],
                200);
        }
        return response()->json(['message' => 'Invalid Credentials'], 401);

    }
}
