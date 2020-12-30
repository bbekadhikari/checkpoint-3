<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
   public function index()
   {
       $services = Service::all();
       return view('back.service.index',compact('services'));
   }

    public function store(Request $request)
    {
        $service = new Service;
        $service->heading = $request->banner;
        $service->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(440, 320)->save($destinationpath);

        }
        $service->image = $dbimagename;
        $service->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }
    public function edit(Service $service)
    {
        return view('back.service.edit',compact('service'));
    }

    public function update (Request $request, Service $service)
    {
        $service->heading = $request->banner;

        $service->description = $request->description;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
    Image::make($image)->resize(440,320)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $service->image=$imagename;
            $service->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $service->image=$oldimage;

        $service->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Service $service)
    {
        if(!$service->image==null){
            $image = $service->image;
            unlink('public/uploads/'.$image);
        }
        $service->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
