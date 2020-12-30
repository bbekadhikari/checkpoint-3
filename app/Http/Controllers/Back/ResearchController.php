<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Research;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ResearchController extends Controller
{
    public function index()
    {
        $researches = Research::all();
        return view('back.research.index',compact('researches'));
    }

    public function store(Request $request)
    {
        $research = new Research;
        $research->heading = $request->banner;
        $research->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(440, 320)->save($destinationpath);

        }
        $research->image = $dbimagename;
        $research->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }
    public function edit(Research $research)
    {
        return view('back.research.edit',compact('research'));
    }

    public function update (Request $request, Research $research)
    {
        $research->heading = $request->banner;

        $research->description = $request->description;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
            Image::make($image)->resize(440,320)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $research->image=$imagename;
            $research->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $research->image=$oldimage;

        $research->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Research $research)
    {
        if(!$research->image==null){
            $image = $research->image;
            unlink('public/uploads/'.$image);
        }
        $research->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
