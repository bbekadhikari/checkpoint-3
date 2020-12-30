<?php

namespace App\Http\Controllers\Back;

use App\Category;
use App\Http\Controllers\Controller;
use App\Subcat;
use Illuminate\Http\Request;

class SubCategory extends Controller
{
   public function index()
   {
       $category = Category::all();
       $subcats = Subcat::orderBy('updated_at','desc')->get();
       return view('back.subcat.index',compact('category','subcats'));
   }
   public function store(Request $request)
   {

       $this->validate($request,[

          'name'=>'required',
       ]);
          $cat_id = Category::where('name',$request->cat_id)->first();

       $subcat = new Subcat();
       $subcat->category_id = $cat_id->id;
       $subcat->cat_name = $request->cat_id;
       $subcat->name = $request->name;
       $subcat->slug = $request->slug;
       $subcat->save();
       flash('subcat added successfully','success');
       return redirect()->back();

   }
   public function edit(Subcat $subcategory)
   {
       $categories = Category::all();
       return view('back.subcat.edit',compact('subcategory','categories'));
   }

    public function update(Request $request,Subcat $subcategory)
    {
        $this->validate($request,[

            'name'=>'required',
        ]);


        $subcategory->cat_name = $request->cat_id;
        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;
        $subcategory->save();

        flash('subcategory updated successfully','success');
        return redirect()->back();

    }
    public function delete(Subcat $subcategory)
    {
        $subcategory->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
