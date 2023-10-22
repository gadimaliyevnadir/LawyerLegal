<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use Authenticatable;

    public function login(){
        if(auth()->check()){
            return redirect()->route('admin.home');
        }
        return view('admin.auth.login');
    }
    public function loginSubmit(Request $request){
        $request->validate([
            'email'=>'required|email|min:3',
            'password'=>'required|min:6'
        ]);

        if(auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ],true)){
            auth()->user();
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with(['type'=>'error','message'=>'Login Məlumatları düzgün deyil']);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
