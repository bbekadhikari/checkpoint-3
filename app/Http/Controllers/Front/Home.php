<?php

namespace App\Http\Controllers\Front;

use App\Brand;
use App\Category;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Page;
use App\Portfollio;
use App\Product;
use App\Productattribute;
use App\Productcategory;
use App\Productsubcat;
use App\Programs;
use App\Aboutus;
use App\Proimage;
use App\Service;

use App\Research;
use App\Whychoose;
use App\Subcat;
use App\Vacancyform;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function main()
    {
        return view('front.index');
    }
     public function contact()
    {
        return view('front.contact');
    }

    public function singleuniversity(Research $research)
    {
        return view('front.singleuniversity',compact('research'));
    }

     public function testimonial()
    {
        return view('front.testimonial');
    }
     public function universities()
    {
        $universities = Research::orderBy('created_at','desc')->get();
        return view('front.topuniversities',compact('universities'));
    }
     public function grade()
    {
        
        return view('front.grade');
    }
      public function about(Aboutus $aboutus)
    {
        
        return view('front.about',compact('aboutus'));
    }
    public function whychoose()
    {
        $whychoose = Whychoose::orderBy('created_at','desc')->first();
        return view('front.whychoose',compact('whychoose'));
    }

     public function allabroad()
    {
        $abroads = Portfollio::orderBy('created_at','desc')->get();
        return view('front.studyabroad',compact('abroads'));
    }

     public function services(Service $service)
    {
        return view('front.services',compact('service'));
    }
     
      public function abroad(Portfollio $port)
    {
          
        return view('front.abroad',compact('port'));
    }
       public function abroads(Portfollio $port)
    {
           dd($port);
        return view('front.abroad',compact('port'));
    }
    public function brand(Brand $brand)
    {
        $products = Product::where([['brand','=',$brand->slug],['status','=','enable']])->get();
        return view('front.allproduct',compact('products'));
    }

    public function detail(Product $product)
    {

        $proatts =Productattribute::where('product_id','=',$product->id)->first();
        $power =explode(',',$proatts->power);

        $product = Product::where('id','=',$product->id)->first();
        $products = Product::where('id','!=',$product->id)->get();
        $galleries = Gallery::where('product_id','=',$product->id)->get();
        $total_stock =Productattribute::where('product_id','=',$product->id)->sum('stock');


        return view('front.detail',compact('product','products','galleries','power','total_stock'));
    }

    public function getpower(Request $request)
    {

       $data = $request->all();
       $deta =explode(',',$data['eye']);

       $proattr = Productattribute::where([
           ['product_id','=',$deta[0]],
           ['eye','=',$deta[1]]
           ])
                             ->first();



       echo $proattr->stock;


    }

    public function mail(Vacancyform $form)
    {
        return view('mail',compact('form'));
    }

    public function service(Service $service)
    {
        return view('front.service',compact('service'));
    }
    public function program(Programs $program)
    {
        return view('front.program',compact('program'));
    }

    public function nav(Category $page)
    {
        $pages = Page::where('category',$page->name)->orderBy('created_at','desc')->get();
        return view('front.pages.droppage',compact('pages','page'));
    }
    public function subnav(Subcat $page)
    {

        $pages = Page::where('subcat',$page->name)->orderBy('created_at','desc')->get();
        return view('front.pages.droppage',compact('pages','page'));
    }


    public function product(Product $product)
    {
        $attributes = Proimage::where('product_id',$product->id)->get();



        return view('front.detail',compact('product','attributes'));
    }


    public function productpage(Product $productcategory)
    {

        $productsubcat = Productsubcat::where('productcategory_id',$productcategory->id)->get();
        $subcate = Productsubcat::where('productcategory_id',$productcategory->id)->first();

        return view('front.category',compact('productcategory','productsubcat','subcate'));
    }


}
