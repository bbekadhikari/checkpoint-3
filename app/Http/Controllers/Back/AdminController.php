<?php

namespace App\Http\Controllers\Back;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admins= Admin::where('id','!=',auth('admin')->id())->get();

        return view('back.admin.index',compact('admins'));
    }
    public function RegestrationForm()
    {
        return view('back.admin.addadmin');
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'name'=>'required',
            'email'=>'required | unique:admins',
            'password'=>'required | confirmed',
            'type'=>'required'


        ]);



        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email =$request->email;
        $admins->type =$request->type;
        $admins->password =bcrypt($request->password);

        $admins->save();
        flash('admin added successfully','success');
        return redirect()->back();



    }

    public function destroy(Admin $admin)
    {
        if($admin->image != null){
            $destinationpath = 'public/adminimg/';
            $image =$admin->image;
            unlink($destinationpath.$image);
            $admin->delete();
            flash('Admin Deleted Successfully','success');
            return redirect()->back();
        }
        else{
            $admin->delete();
            flash('Admin Deleted Successfully','success');
            return redirect()->back();
        }
    }

}
