<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
    public function ChangePassword()
    {


        return view('back.login.changepassword');
    }
    public function EditProfile()
    {
        $user = auth('admin')->user();

        return view('back.login.editprofile',compact('user'));
    }
    public function update(Request $request)

    {

        $this->validate($request,[
            'name'=>'required'
        ]);
        if($request->hasFile('image')){
            $user = auth('admin')->user();
            $image = $request->file('image');
            $imagename=time().$image->getClientOriginalName();

            $destinationpath = 'public/adminimg/';
            if($request->old_image == null){
                $image->move($destinationpath,$imagename);
                $user->name = $request->name;
                $user->phone =$request->contact;
                $user->address =$request->address;
                $user->image =$imagename;
                $user->save();
                flash('Updated successfully','success');
                return back();
            }
            else{
                unlink($destinationpath.$request->old_image);
                $image->move($destinationpath,$imagename);
                $user->name = $request->name;
                $user->phone =$request->contact;
                $user->address =$request->address;
                $user->image =$imagename;
                $user->save();
                flash('Updated successfully','success');
                return back();
            }
        }
        else{
            $user = auth('admin')->user();

            $user->name = $request->name;
            $user->phone =$request->contact;
            $user->address =$request->address;
            $user->save();
            flash('Updated successfully','success');
            return back();
        }

    }

    public function UpdatePassword(Request $request)
    {


        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required|confirmed'
        ]);

        $user= auth('admin')->user();

        if(!password_verify($request->old_password,$user->password)){

            flash('Incorrect Old Password','warning');
            return redirect()->route('admin.changepassword');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Password Changed successfully','success');
        return redirect()->back();

    }
}
