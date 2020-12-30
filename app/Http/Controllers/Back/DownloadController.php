<?php

namespace App\Http\Controllers\Back;

use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::orderBy('created_at','desc')->get();
        return view('back.download.index',compact('downloads'));
    }

    public function store(Request $request)
    {
        $download = new Download;
        $download->heading = $request->heading;
        $download->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/document/' . $dbimagename;
             $image->move('public/document/',$dbimagename);

        }

        $download->file = $dbimagename;

        $download->save();
        flash('File Uploaded Successfull','success');
        return redirect()->back();

    }

    public function edit(Download $download)
    {
        return view('back.download.edit',compact('download'));
    }
    public function update(Request $request , Download $download)
    {
        $download->heading = $request->heading;
        $download->description = $request->description;
        $oldimage = $request->oldfile;


        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/document/".$imagename;

            Image::make($image)->resize(1364,393)->save($destinationpath);
            unlink('public/document/'.$oldimage);
            $download->file=$imagename;
            $download->description =$request->description;
            $download->heading =$request->heading;

            $download->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $download->file=$oldimage;
        $download->save();
        flash('updated successfully','success');
        return redirect()->back();

    }

    public function delete(Download $download)
    {
        if(!$download->image==null){
            $image = $download->image;
            unlink('public/document/'.$image);
        }
        $download->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }

}
