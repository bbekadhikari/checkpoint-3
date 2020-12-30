<?php

namespace App\Http\Controllers\Back;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::orderBy('created_at','desc')->get();
        return view('back.gallery.index',compact('gallery'));
    }

    public function store(Request $request)
    {


        if ($request->hasFile('image')) {

            $images = $request->file('image');
            foreach ($images as $image){
                $originalname = time() . '' . $image->getClientOriginalName();
                $destination = 'public/images/'.$originalname;
                Image::make($image)->resize(1000, 1000)->save($destination);
                $gallery = new Gallery;
                $gallery->image = $originalname;
                $gallery->save();
            }
            flash('Image Uploaded successfully', 'success');
            return redirect()->back();

        }

    }

    public function delete (Gallery $gallery){

        if($gallery->image != null){
            unlink('public/images/'.$gallery->image);
        }
        $gallery->delete();
        flash('Gallery Image Deleted Successfully','success');
        return redirect()->back();
    }

}
