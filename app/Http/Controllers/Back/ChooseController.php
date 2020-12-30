<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Whychoose;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ChooseController extends Controller
{
  public function index()
  {
      $chooses  = Whychoose::orderby('created_at','desc')->get();
      return view('back.why.index',compact('chooses'));
  }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'banner' => 'required',
            'description' => 'required',
        ]);
        $choose = new Whychoose();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();

            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(450, 320)->save($destinationpath);
            $choose->submenu = $dbimagename;
        }
        $choose->heading = $request->banner;
        $choose->description= $request->description;
        $choose->save();
        flash('Data Uploaded', 'success');
        return redirect()->back();
    }

    public function edit(Whychoose $choose)
    {
        return view('back.why.edit', compact('choose'));
    }

    public function update(Request $request, Whychoose $choose)
    {

        $oldimage = $request->oldfile;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imagename = time() . $image->getClientOriginalName();
            $destinationpath = "public/uploads/" . $imagename;

            Image::make($image)->resize(450, 320)->save($destinationpath);
            unlink('public/uploads/' . $oldimage);
            $choose->submenu = $imagename;
        }
        $choose->heading = $request->banner;
        $choose->description= $request->description;
        $choose->save();
        flash('updated successfully','success');
        return redirect()->back();
    }
    public function delete(Whychoose $choose)
    {
        if(!$choose->submenu==null){
            $image = $choose->submenu;
            unlink('public/uploads/'.$image);
        }
        $choose->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
    public function choose(Whychoose $choose)
    {
        return view('front.pages.chooseus',compact('choose'));
    }
}
