<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
            $register = new Register;
            $register->name = $request->name;
            $register->email = $request->email;
            $register->phone = $request->phone;
            $register->save();
            flash('thank you','success');
            return redirect()->back();
    }

    public function index()
    {
    	$registers = Register::orderBy('created_at','desc')->get();
    	return view('back.register.index',compact('registers'));
    }

      public function delete(Register $register)
    {
        $register->delete();
        flash('Message Deleted','danger');
        return redirect()->back();
    }
    public function seen(Register $register,$view)
    {
        $register->status =$view;
        $register->save();
        flash('Message Seen','warning')->important();
      return view('back.register.message',compact('register'));
    }
}
