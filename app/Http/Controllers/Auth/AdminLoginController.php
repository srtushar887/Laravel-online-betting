<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }


    public function showLoginform()
    {
        return view('auth.adminLogin');
    }



    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect(route(route('admin.dashboard')));
        }

        return redirect()->back();

    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
