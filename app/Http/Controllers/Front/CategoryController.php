<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        dd($category);
        $category = Category::where()->get();
        return view('front.allproduct',compact('category'));
    }
}
