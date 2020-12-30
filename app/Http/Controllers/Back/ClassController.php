<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Grade;
use Intervention\Image\Facades\Image;

class ClassController extends Controller
{
     public function index()
   {
       $grades = Grade::all();
       return view('back.class.index',compact('grades'));
   }
    public function store(Request $request)
    {
        $class = new Grade;
        $class->heading = $request->banner;
        $class->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(440, 320)->save($destinationpath);

        }
        $class->banner = $dbimagename;
        $class->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }



     public function edit(Grade $class)
    {
        return view('back.class.edit',compact('class'));
    }

    public function update (Request $request, Grade $class)
    {
        $class->heading = $request->banner;

        $class->description = $request->description;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
    Image::make($image)->resize(440,320)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $class->banner=$imagename;
            $class->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $class->banner=$oldimage;

        $class->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Grade $class)
    {
        if(!$class->image==null){
            $image = $class->image;
            unlink('public/uploads/'.$image);
        }
        $class->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
