<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function viewlogin(){
        return view('login');
    }

    public function submitlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $user = User::where('email', '=', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            return view('welcome');
        }

        return back()->withErrors ([
            'password'=>'Wrong password or Email'
        ]);
        
    }
}
