<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aboutus;
use Intervention\Image\Facades\Image;

class AboutusController extends Controller
{
     public function index()
   {
       $aboutus = Aboutus::all();
       return view('back.about.index',compact('aboutus'));
   }
    public function store(Request $request)
    {
        $service = new Aboutus;
        $service->heading = $request->banner;
        $service->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(440, 320)->save($destinationpath);

        }
        $service->banner = $dbimagename;
        $service->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }



     public function edit(Aboutus $aboutus)
    {
        return view('back.about.edit',compact('aboutus'));
    }

    public function update (Request $request, Aboutus $aboutus)
    {
        $aboutus->heading = $request->banner;

        $aboutus->description = $request->description;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
    Image::make($image)->resize(440,320)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $aboutus->banner=$imagename;
            $aboutus->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $aboutus->banner=$oldimage;

        $aboutus->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Aboutus $aboutus)
    {
        if(!$aboutus->image==null){
            $image = $aboutus->image;
            unlink('public/uploads/'.$image);
        }
        $aboutus->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
