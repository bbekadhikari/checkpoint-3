<?php

namespace App\Http\Controllers\Back;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Mail\sendmail;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerifyController extends Controller
{
    public function verify(Request $request)
    {

        $user = Admin::where('email',$request->email)->first();

        $this->validate($request,[
            'email' => 'required',
        ]);
        if (! empty($user))
        {
            $data = array(
                'id' => $user->id,
                'email'=>$user->email,
            );
            Mail::to($user->email)->send(new VerifyEmail($data));
            flash('Please Check your email to recover password !','success');
            return back();
        }
        else
        {
            flash('Incorrect Email please Check email and try again','success')->important();
            return redirect()->back();
        }

    }


    public function recover($id)
    {
        return view('back.recovery.recovery',compact('id'));
    }
    public function update(Request $request)
    {

        $user =Admin::find($request->id);
        $user->password = bcrypt($request->password);
        $user->save();
        flash('password changed now you can login to your account','success')->important();
        return view('back.login.show');
    }
}
