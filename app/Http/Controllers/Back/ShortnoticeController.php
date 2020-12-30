<?php

namespace App\Http\Controllers\Back;

use App\Shortnotice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortnoticeController extends Controller
{
    public function index()
    {
    	$shortnotice =Shortnotice::orderBy('created_at','desc')->first();
    	return view('back.shortnotice.index',compact('shortnotice'));
    }
    public function update(Shortnotice $shortnotice,Request $request)
    {
         
    	$shortnotice->heading1 = $request->heading1;
    	$shortnotice->heading2 = $request->heading2;
    	$shortnotice->heading3 = $request->heading3;
    	$shortnotice->heading4 = $request->heading4;
    	$shortnotice->description1 =$request->description1;
    	$shortnotice->description2=$request->description2;
    	$shortnotice->description3 =$request->description3;
    	$shortnotice->description4 =$request->description4;
    	$shortnotice->status =$request->status;
    	$shortnotice->save();

    	flash('Notice updated','success');
    	return redirect()->back();
    }
}
