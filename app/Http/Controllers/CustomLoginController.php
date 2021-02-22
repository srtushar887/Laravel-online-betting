<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomLoginController extends Controller
{
    public function user_login()
    {
        return view('auth.login');
    }


    public function user_login_submit(Request $request)
    {
        $this->validate($request,[
            'user_name' => 'required',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('web')->attempt(['user_name'=>$request->user_name,'password'=>$request->password],$request->remember)){
            return redirect(route('dashboard'));
        }

        return redirect()->back();
    }


    public function user_data_store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->show_pass = $request->password;
        $user->gender = $request->gender;
        $user->qs_id = $request->qs_id;
        $user->qs_ans = $request->qs_ans;
        $user->street = $request->street;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->phone_number = $request->phone_number;
        $user->ref_id = $request->ref_id;
        $user->save();

        return redirect(route('user.login'));

    }

}
