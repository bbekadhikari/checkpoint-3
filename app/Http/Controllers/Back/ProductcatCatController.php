<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Productcategory;
use Illuminate\Http\Request;

class ProductcatCatController extends Controller
{
    public function index()
    {
        $categories = Productcategory::orderBy('created_at','desc')->get();
        return view('back.product.procat.index',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $productcat = new Productcategory;
        $productcat->name = $request->name;
        $productcat->slug = $request->slug;
        $productcat->save();
        flash('Product Category added Successfully','success');
        return redirect()->back();
    }
    public function edit(Productcategory $productcategory)
    {

        return view('back.product.procat.edit',compact('productcategory'));
    }
    public function update(Request $request, Productcategory $productcategory)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);


        $productcategory->name = $request->name;
        $productcategory->slug = $request->slug;
        $productcategory->save();
        flash('Product category updated','success');
        return redirect()->back();
    }

    public function delete(Productcategory $productcategory)
    {
        $productcategory->delete();
        flash('Product category deleted','success');
        return redirect()->back();
    }

    public function status(Request $request,Productcategory $productcategory)
    {
        $productcategory->status = $request->status;
        $productcategory->save();
        flash('Status Updated','success');
        return redirect()->back();
    }
}
