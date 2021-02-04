<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function LoginForm()
    {
        return view('admin.login');
    }

    public function LoginTo(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=> $email, 'password'=> $password, 'active' => 1])){
            if(Auth::User()->user_type==0)
                return "Dashboard Admin Page";
            else
                return "Dashboard User Page";
        }else{
            return redirect()->back();
        }
    }
}
