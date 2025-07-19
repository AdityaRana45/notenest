<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
        public function showRegister() {
        return view('register');
        }

    // register data 
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
        Auth::login($user);
        return redirect('/');
    }

    // login page show

    public function showlogin(){
        return view('login');
    }
    public function login(Request $request){
        $credentials= $request->only('email','password');


        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email'=>'invalid credentials']);
    }



     public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
