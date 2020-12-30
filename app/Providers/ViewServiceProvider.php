<?php

namespace App\Providers;

use App\Aboutu;
use App\Banner;
use App\Blog;
use App\Brand;
use App\Shortnotice;
use App\Cast;
use App\Provideheading;
use App\Category;
use App\Contact;
use App\Dialogue;
use App\District;
use App\Employment;
use App\Fatheredu;
use App\Fatheroccu;
use App\Gallery;
use App\Featured;
use App\Grade;
use App\Heading;
use App\Level;
use App\Maritalstatus;
use App\Motheredu;
use App\Motherlanguage;
use App\Physically;
use App\Portfollio;
use App\Product;
use App\Productcategory;
use App\Programs;
use App\Religion;
use App\Research;
use App\Service;
use App\Sex;
use App\Slider;
use App\Social;
use App\Subcat;
use App\Team;
use App\Touch;
use App\Footer;
use App\Notice;
use App\Download;
use App\Video;
use App\Whychoose;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\Project;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        view()->composer('front.includes.header',function($view)
        {
            $categories = Category::where('status','=','enable')->get();
            $services = Service::orderBy('created_at','desc')->get();
            $portfollio =Portfollio::orderBy('updated_at','desc')->get();
            $footer =Footer::orderBy('updated_at','desc')->first();
            $view->with(compact(['services','portfollio','footer']));
        });
        view()->composer('front.includes.sidenav',function($view)
        {
            $researches =Research::orderBy('created_at','desc')->get();
            $services = Service::orderBy('created_at','desc')->get();
            $shortnotice =Shortnotice::orderBy('created_at','desc')->first();
            $view->with(compact(['services','researches','shortnotice']));
        });
         view()->composer('front.includes.header',function($view)
        {
            $logo = Featured::orderBy('created_at','desc')->first();
            $view->with(compact(['logo']));
        });


       view()->composer('front.gallery',function($view)
        {
            $galleries = Gallery::orderBy('created_at','desc')->get();
            $view->with(compact(['galleries']));
        });

       view()->composer('front.testimonial',function($view)
        {
            $testimonials = Team::orderBy('created_at','desc')->get();
            $view->with(compact(['testimonials']));
        });

        view()->composer('back.subcat.index',function($view)
        {
            $categories = Category::where('status','=','enable')->get();
            $view->with(compact(['categories']));
        });
        view()->composer('front.grade',function($view)
        {
            $grades = Grade::orderBY('updated_at','desc')->get();
            $shortnotice =Shortnotice::orderBy('updated_at','desc')->first();
            $view->with(compact(['grades','shortnotice']));
        });
        view()->composer('front.index',function($view)
        {
            $subcat = [];
            $categories = Category::where('status','=','enable')->get();
           foreach ($categories as $category)
           {
               $subcat =Subcat::where('cat_name',$category->name)->get();

           }
            $view->with(compact(['categories','subcat']));
        });
        view()->composer('front.index',function($view)
        {
            $heading = Heading::orderBy('updated_at','desc')->first();
            $banner= Banner::orderBy('created_at','desc')->first();
            $banners = Banner::orderBy('created_at','desc')->where('id','!=',$banner->id)->get();
            $studyabroad =Portfollio::orderBy('updated_at','desc')->get();
             $universities =Research::orderBy('updated_at','desc')->get();
             $choose= Whychoose::orderBy('updated_at','desc')->first();
             $weprovide= Provideheading::orderBy('updated_at','desc')->first();
             $services= Service::orderBy('updated_at','desc')->limit(4)->get();
            $view->with(compact(['services','weprovide','banner','heading','banners','studyabroad','universities','choose']));
        });
         view()->composer('front.includes.sidenav',function($view)
        {
            $heading = Heading::orderBy('updated_at','desc')->first();
            $banner= Banner::orderBy('created_at','desc')->first();
            $banners = Banner::orderBy('created_at','asc')->get();
            $studyabroad =Portfollio::orderBy('updated_at','desc')->get();
             $universities =Research::orderBy('updated_at','desc')->get();
             $choose= Whychoose::orderBy('updated_at','desc')->first();
             $weprovide= Provideheading::orderBy('updated_at','desc')->first();
             $services= Service::orderBy('updated_at','desc')->limit(4)->get();
            $view->with(compact(['services','weprovide','banner','heading','banners','studyabroad','universities','choose']));
        });


        view()->composer('front.index',function($view)
        {
            $video= Video::orderBy('created_at','desc')->first();

            $view->with(compact(['video']));
        });
        // view()->composer('front.gallery',function($view)
        // {
        //     $galleries= Gallery::orderBy('created_at','desc')->first();

        //     $view->with(compact(['galleries']));
        // });

         view()->composer('front.abroad',function($view)
        {
            $portfollio =Portfollio::orderBy('created_at','desc')->get();
             $shortnotice =Shortnotice::orderBy('updated_at','desc')->first();

            $view->with(compact(['portfollio','shortnotice']));
        });

        view()->composer('front.includes.footer',function($view)
        {
            $footer= Footer::orderBy('created_at','desc')->first();
            $classes =Grade::orderBy('created_at','desc')->get();
            $logo =Featured::orderBy('created_at','desc')->first();

            $view->with(compact(['footer','classes','logo']));
        });

        view()->composer('back.includes.topnav',function($view)
        {
          $count =Contact::where('status','unseen')->count();

            $view->with(compact(['count']));
        });



        view()->composer('front.contact',function($view)
        {
            $footer =Footer::orderBy('updated_at','desc')->first();
            $view->with(compact(['footer']));
        });
        view()->composer('front.includes.footer',function($view)
        {
            $menus =Category::all();
            $productcats =Productcategory::all();
            $footer = Footer::orderBy('created_at','desc')->first();
            $view->with(compact(['menus','productcats','footer']));
        });
        view()->composer('front.index',function($view)
        {
            $products =Product::orderBy('created_at','desc')->get();
            $teams =Team::orderBy('created_at','desc')->get();
            $shortnotice =Shortnotice::orderBy('updated_at','desc')->first();
            $view->with(compact(['products','teams','shortnotice']));
        });
        view()->composer('front.includes.nav',function($view)
        {
            $productcategory =Productcategory::orderBy('created_at','desc')->get();
            $footer =Footer::orderBy('updated_at','desc')->first();
            $view->with(compact(['productcategory','footer']));
        });
        view()->composer('front.contact',function($view)
        {
             $productcategory =Productcategory::orderBy('created_at','desc')->get();
            $footer =Footer::orderBy('updated_at','desc')->first();
            $view->with(compact(['productcategory','footer']));
        });
        view()->composer('front.detail',function($view)
        {

            $productitems = Product::orderBy('created_at','desc')->get();
            $view->with(compact(["productitems"]));
        });


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
