<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Portfollio;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PortfollioController extends Controller
{
    public function index()
    {
        $portfollios = Portfollio::all();
        return view('back.portfollio.index',compact('portfollios'));
    }

    public function store(Request $request)
    {
        $portfollio = new Portfollio;
        $portfollio->heading = $request->banner;
        $portfollio->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(540, 351)->save($destinationpath);

        }
        $portfollio->image = $dbimagename;
        $portfollio->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }
    public function edit(Portfollio $portfollio)
    {
        return view('back.portfollio.edit',compact('portfollio'));
    }

    public function update (Request $request, Portfollio $portfollio)
    {
        $portfollio->heading = $request->banner;

        $portfollio->description = $request->description;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
            Image::make($image)->resize(540,351)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $portfollio->image=$imagename;
            $portfollio->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $portfollio->image=$oldimage;

        $portfollio->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Portfollio $portfollio)
    {
        if(!$portfollio->image==null){
            $image = $portfollio->image;
            unlink('public/uploads/'.$image);
        }
        $portfollio->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
