<?php

namespace App\Http\Controllers\Back;

use App\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()

    {
        $sliders = Slider::all();
        return view('back.slider.index',compact('sliders'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image'))
        {
            $images =$request->file('image');
            foreach ($images as $image){
                $originalname =time().''.$image->getClientOriginalName();
                $destination ='public/uploads/'.$originalname;
                Image::make($image)->resize(1600,431)->save($destination);
                $sliders = new Slider;
                $sliders->image =$originalname;
                $sliders->save();




            }
            flash('seccessfull uploaded','success');
            return back();
        }




        flash('Data successfully uploaded','success');
        return redirect()->back();


    }

    public function destroy(Slider $slider)
    {


        if($slider->image){
            $name=$slider->image;

            unlink('public/uploads/'.$name);
            $slider->delete();
            flash('Category Deleted Successfully','success');
            return redirect()->back();
        }

    }

}
