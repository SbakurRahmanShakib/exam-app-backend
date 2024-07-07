<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class RegisterController extends Controller
{
    //

    public function register()
    {
        // dd('hello from register page');
        
        return view('Auth.register');
    }

    public function postRegister(Request $request)
    {
        $validate_data =[
           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
        ];

        Validator::make($request->all(),$validate_data)->validate();

        $data = [
            'f_name'   => $request['f_name'],
            'l_name'   => $request['l_name'],
            'email'    => $request['email'],
            'phone'    => $request['phone'],
            'password' =>Hash::make($request['password'])
        ];

         $user = User::create($data);
         Auth::login($user);



        return redirect()->route('home');



    }
}
