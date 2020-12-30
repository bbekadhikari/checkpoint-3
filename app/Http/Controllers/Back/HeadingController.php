<?php

namespace App\Http\Controllers\Back;

use App\Heading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    public function index()
    {
        $headings = Heading::orderBy('updated_at','desc')->get();
        return view('back.heading.index',compact('headings'));
    }
    public function store(Request $request)
    {
        $heading = new Heading;
        $heading->service = $request->service;
        $heading->portfollio = $request->portfollio;
        $heading->research = $request->research;
        $heading->ourteam = $request->team;
        $heading->blog = $request->blog;
        $heading->save();
        flash('Heading Data Uploaded Successfully','success');
        return redirect()->back();
    }
    public function edit(Heading $heading)
    {
        return view('back.heading.edit',compact('heading'));
    }

    public function update(Request $request,Heading $heading)
    {
        $heading->service = $request->service;
        $heading->portfollio = $request->portfollio;
        $heading->research = $request->research;
        $heading->ourteam = $request->team;
        $heading->blog = $request->blog;
        $heading->save();
        flash('Heading Data Updated Successfully','success');
        return redirect()->back();

    }

    public function delete(Heading $heading)
    {
        $heading->delete();
        flash('data deleted','success');
        return redirect()->back();
    }
}
