<?php

namespace App\Http\Controllers\Back;

use App\Banner;
use App\Http\Controllers\Controller;
use DemeterChain\B;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BanerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('back.baner.index', compact('banners'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'banner' => 'required',
        ]);
        $banner = new Banner;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();

            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(1920, 830)->save($destinationpath);
            $banner->image = $dbimagename;
        }
        $banner->heading = $request->banner;
        $banner->save();
        flash('Data Uploaded', 'success');
        return redirect()->back();
    }

    public function edit(Banner $banner)
    {
        return view('back.baner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {


        $oldimage = $request->oldfile;


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imagename = time() . $image->getClientOriginalName();
            $destinationpath = "public/uploads/" . $imagename;

            Image::make($image)->resize(450, 320)->save($destinationpath);
            unlink('public/uploads/' . $oldimage);
            $banner->image = $imagename;
        }
        $banner->heading = $request->banner;
        $banner->save();
        flash('updated successfully','success');
        return redirect()->back();
    }
    public function delete(Banner $banner)
    {
        if(!$banner->image==null){
            $image = $banner->image;
            unlink('public/uploads/'.$image);
        }
        $banner->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}