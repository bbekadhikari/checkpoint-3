<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Productcategory;
use App\Productsubcat;
use Illuminate\Http\Request;

class ProductsubcatController extends Controller
{

    public function index()
    {
        $categories = Productcategory::all();

        $subcats = Productsubcat::orderBy('updated_at','desc')->get();
        return view('back.product.prosubcat.index',compact('categories','subcats'));
    }
    public function store(Request $request)
    {

        $this->validate($request,[

            'name'=>'required',
        ]);
        $cat_id = Productcategory::where('name',$request->cat_id)->first();

        $subcat = new Productsubcat();
        $subcat->productcategory_id = $cat_id->id;
        $subcat->productcategory_name = $request->cat_id;
        $subcat->name = $request->name;
        $subcat->slug = $request->slug;
        $subcat->save();
        flash('subcat added successfully','success');
        return redirect()->back();

    }
    public function edit(Productsubcat $productcategory)
    {
       // $productsubcat = Productsubcat::all();

        $category_nanme =Productcategory::where('name',$productcategory->productcategory_name)->first();
        $categories = Productcategory::all();
        return view('back.product.prosubcat.edit',compact('productcategory','categories','category_name'));
    }

    public function update(Request $request,Productsubcat $productcategory)
    {

        $this->validate($request,[

            'name'=>'required',
        ]);


        $productcategory->productcategory_name = $request->cat_id;
        $productcategory->name = $request->name;
        $productcategory->slug = $request->slug;
        $productcategory->save();

        flash('subcategory updated successfully','success');
        return redirect()->back();

    }
    public function delete(Productsubcat $productcategory)
    {
        $productcategory->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
