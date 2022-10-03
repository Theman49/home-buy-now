<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential['status'] = 'seller';
        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('seller');
        }

        return back()->with("LoginError", "Login Failed");
    }
    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
