<?php

namespace App\Http\Controllers\Back;

use App\Category;
use App\Provideheading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
        $weprovide = Provideheading::orderBy('updated_at','desc')->first();
        return view('back.category.index',compact('weprovide'));
    }
    public function store(Request $request)
    {
       $this->validate($request,[
           'name'=>'required',
           ]);

       $category = new Category;
       $category->name = $request->name;
       $category->slug = $request->slug;
       $category->save();
       flash('categories added','success');
       return redirect()->back();
    }
    public function edit(Category $category)
    {
        return view('back.category.edit',compact('category'));
    }

    public function update(Request $request, Provideheading $weprovide)
    {

          
        $weprovide->Shortdes = $request->name;
       $oldimage = $request->oldfile;


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imagename = time() . $image->getClientOriginalName();
            $destinationpath = "public/uploads/" . $imagename;

            Image::make($image)->resize(450, 320)->save($destinationpath);
            unlink('public/uploads/' . $oldimage);
            $weprovide->image = $imagename;
        }
        $weprovide->save();
        flash('Data updated','success');
        return redirect()->back();
    }

    public function delete(Category $category)
    {
        $category->delete();
        flash('category deleted','success');
        return redirect()->back();
    }

    public function status(Request $request,Category $cat)
    {
        $cat->status = $request->status;
        $cat->save();
        flash('Status Updated','success');
        return redirect()->back();
    }
}
