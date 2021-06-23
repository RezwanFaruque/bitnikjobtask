<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    // login function for admin
    public function adminLogin(Request $request){

        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        if($request->email){
            if(Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
                return redirect()->route('admin.index');
            }else{
                return redirect()->route('admin.login')->with('errors','Admin Credential Not Found');
            }
        }


        
    }

    // loggin out admin
    public function adminlogout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
