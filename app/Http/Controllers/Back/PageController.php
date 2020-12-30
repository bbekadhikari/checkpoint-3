<?php

namespace App\Http\Controllers\Back;

use App\Category;
use App\Http\Controllers\Controller;
use App\Page;
use App\Subcat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcats = Subcat::all();
        $pages = Page::all();
        return view('back.page.index',compact('pages','categories','subcats'));
    }

    public function store(Request $request)
    {
        $page = new Page;
        $page->page = $request->description;
        $page->category = $request->category;
        $page->subcat = $request->subcat;
        $page->save();
         flash('Data uploaded successfully','success')->important();
        return redirect()->back();
    }
    public function edit(Page $page)
    {
        return view('back.page.edit',compact('page'));
    }
    public function update(Request $request,Page $page)
    {

        $page->page = $request->description;
        $page->category = $request->category;
        $page->subcat = $request->subcat;
        $page->save();
        flash('Popup Updated successfully','success');
        return redirect()->back();
    }
    public function delete(Page $page)
    {
        $page->delete();
        flash('Data removed','danger');
        return redirect()->back();
    }
}
