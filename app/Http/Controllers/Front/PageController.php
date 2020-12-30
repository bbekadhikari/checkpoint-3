<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Page;
use App\Portfollio;
use App\Research;
use App\Service;
use App\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
 public function service(Service $page)
 {
     return view('front.pages.page',compact('page'));
 }
    public function project(Portfollio $page)
    {
        return view('front.pages.singleproject',compact('page'));
    }
    public function research(Research $page)
    {
        return view('front.pages.page',compact('page'));
    }
    public function team(Team $page)
    {
        return view('front.pages.oneteam',compact('page'));
    }
    public function nav(Page $page)
    {

        return view('front.pages.team',compact('page'));
    }
    public function page(Page $page)
    {

        return view('front.pages.team',compact('page'));
    }

    public function allresearch()
    {
        $researches =Research::orderBy('created_at','desc')->get();
        return view('front.pages.research',compact('researches'));
    }
    public function allteam()
    {
        $researches =Team::orderBy('created_at','desc')->get();
        return view('front.pages.team',compact('researches'));
    }
}
