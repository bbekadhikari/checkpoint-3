<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $q=$request->q;
        $products = Product::where('name', 'LIKE', '%' . $q . '%')->get();

        return view('front.product',compact('products'));
    }
}
