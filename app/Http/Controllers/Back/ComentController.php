<?php

namespace App\Http\Controllers\Back;

use App\Coment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::orderBy('created_at','desc')->get();

        return view('back.coment.index',compact('coments'));
    }
    public function store(Request $request)
    {
        $comment = new Coment();
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->save();
        return redirect()->back();
    }
    public function delete(Coment $coment)
    {

        $coment->delete();
        flash('comment deleted','success');
        return redirect()->back();
    }
}
