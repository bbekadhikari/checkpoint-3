<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function showLoginForm()
   {
       return view('back.login.show');
   }
   public function checklogin(Request $request)
   {
       $credentials =$request->only('email','password');
       if(Auth::guard('admin')->attempt($credentials,$request->remember)){
           return redirect()->route('admin.home');
       }
       else{

           flash('Incorrect email/password','danger');
           return redirect()->route('admin.login');
       }
   }
}
