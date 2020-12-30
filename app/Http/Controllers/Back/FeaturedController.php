<?php

namespace App\Http\Controllers\Back;

use App\Featured;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturedController extends Controller
{
    public function index()
    {
        $featured =Featured::orderBy('created_at','desc')->get();
        return view('back.feature.index',compact('featured'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $name = time() . '.' . $images->getClientOriginalName();
            $destinationPath = public_path('/images');
            $images->move($destinationPath, $name);
            $banner =new Featured();
            $banner->image = $name;
            $banner->save();
        }

        flash('seccessfull uploaded', 'success');
        return back();
    }
    public function delete(Featured $featured)
    {
        if($featured->image != null){
            unlink('public/images/'.$featured->image);
        }
        $featured->delete();

        flash('Image deleted','success');
        return redirect()->back();
    }
}
