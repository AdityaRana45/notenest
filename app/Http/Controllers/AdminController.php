<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use function PHPUnit\Framework\returnArgument;

class AdminController extends Controller
{
    
    function admincheck(Request $request){
        $admin = Admin::where('name',$request->name)->first();
        
        if($admin && Hash::check($request->password,$admin->password)){

            session(['admin_logged_in'=>true]);
             session()->save(); 

             $totaluser= User::count(); // aggrigate fn ka use
            return view('admin.dashboard', ['total' => $totaluser]);

        }
        else{
            return redirect()->back()->with('error','Invalid credentials');
        }

    }
}
