<?php

namespace App\Http\Controllers\Back;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
   public function index()
   {
       $footers = Footer::orderBy('updated_at','desc')->get();
       return view('back.footer.index',compact('footers'));
   }
   public function store(Request $request)
   {
       $footer = new Footer;
       $footer->mobile = $request->mobile;
       $footer->phone = $request->phone;
       $footer->email = $request->email;
       $footer->facebook = $request->facebook;
       $footer->twitter = $request->twitter;
       $footer->insta = $request->insta;
       $footer->youtube = $request->youtube;
       $footer->address = $request->address;
       $footer->save();
       flash('Footer Data Uploaded Successfully','success');
       return redirect()->back();
   }
   public function edit(Footer $footer)
   {
       return view('back.footer.edit',compact('footer'));
   }

   public function update(Request $request,Footer $footer)
   {
       $footer->mobile = $request->mobile;
       $footer->phone = $request->phone;
       $footer->email = $request->email;
       $footer->facebook = $request->facebook;
       $footer->twitter = $request->twitter;
       $footer->insta = $request->insta;
       $footer->youtube = $request->youtube;
       $footer->address = $request->address;
       $footer->save();
       flash('Footer Data Updated Successfully','success');
       return redirect()->back();

   }

   public function delete(Footer $footer)
   {
       $footer->delete();
       flash('data deleted','success');
       return redirect()->back();
   }
}
