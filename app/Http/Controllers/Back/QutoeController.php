<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Quote;
use Illuminate\Http\Request;

class QutoeController extends Controller
{
    public function store(Request $request)
    {

        $quote = new Quote();
        $quote->product_name = $request->product_name;
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->city = $request->city;
        $quote->country = $request->country;
        $quote->phone_number = $request->phone;
        $quote->message = $request->message;
        $quote->save();
        flash('we will assist you soon thank you', 'success')->important();
        return redirect()->back();
    }
    public function index()
    {
        $qutoes = Quote::orderBy('created_at','desc')->get();
        return view('back.qutoe.index',compact('qutoes'));
    }
    public function delete(Quote $qutoe)
    {
        $qutoe->delete();
        flash('Qutoe Deleted','danger')->important();

        return redirect()->back();
    }
    public function seen(Quote $qutoe,$view)
    {
        $qutoe->status =$view;
        $qutoe->save();
        flash('Message Seen','warning')->important();
        return view('back.qutoe.message',compact('qutoe'));
    }
}
