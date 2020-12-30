<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Product;
use App\Productcategory;
use App\Productsubcat;
use App\Proimage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ItemController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return view('back.product.items.index',compact('products'));
    }
    public function create()
    {
        $procats =Productcategory::all();
        $prosubcats =Productsubcat::all();
        return view('back.product.items.create',compact('procats','prosubcats'));
    }

    public function store(Request $request)
    {
        $item = new Product;
        $item->name = $request->product;
        $item->description = $request->description;
        $item->features = $request->feature;
        $item->productcategory_name = $request->category;
        $item->productsubcat_id = $request->subcategory;
        $item->product_code = $request->product_code;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();

            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(512, 512)->save($destinationpath);
            $item->image = $dbimagename;
        }
        $item->save();
        flash("Product uploaded successfully",'success')->important();
        return redirect()->back();

    }



    public function image_store(Request $request)
    {

        if ($request->hasFile('image')) {

            $images = $request->file('image');
            foreach ($images as $image) {
                $originalname = time() . '' . $image->getClientOriginalName();
                $destination = 'public/uploads/' . $originalname;
                Image::make($image)->resize(512, 512)->save($destination);
                $gallery = new Proimage();
                $gallery->product_id = $request->productid;
                $gallery->image = $originalname;
                $gallery->save();
            }



        }
        flash('Image Uploaded successfully', 'success');
        return redirect()->back();
    }

    public function edit(Product $item)
    {

        $productcategories = Productcategory::all();
        $productsubcat =Productsubcat::where('id',$item->productsubcat_id)->first();
        $productsubcats = $productsubcat::all();
        return view('back.product.items.edit',compact('item','productcategories','productsubcat','productsubcats'));
    }

    public function update(Product $item ,Request $request)
    {
        $item->name = $request->product;
        $item->description = $request->description;
        $item->features = $request->feature;
        $item->productcategory_name = $request->category;
        $item->productsubcat_id = $request->subcategory;
        $item->product_code = $request->product_code;
        if ($request->hasFile('image')) {


            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();

            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;

            unlink('public/uploads/' . $request->oldimage);
            Image::make($image)->resize(512, 512)->save($destinationpath);
            $item->image = $dbimagename;
        }
        $item->save();
        flash("Product uploaded successfully",'success')->important();
        return redirect()->back();

    }

    public function attribute_edit(Proimage $proimage)
    {
        $product = $proimage->id;
        $proimages =Proimage::where('product_id',$product)->get();
        return view('back.product.items.attribute',compact('proimages'));
    }

    public function delete(Product $item)
    {

        $item->delete();
        flash('item deleted successfully','danger')->important();
        return redirect()->back();
    }
    public function attribute_delete(Proimage $proimage)
    {

        $proimage->delete();
        flash('item deleted successfully','danger')->important();
        return redirect()->back();
    }

}
