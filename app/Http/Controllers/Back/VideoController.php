<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
   public function index()
   {
       $videos = Video::orderBy('created_at','desc')->get();
       return view('back.video.index',compact('videos'));
   }
   public function store(Request $request)
   {
       $video = new Video;
       $video->video = $request->video;
       $video->save();
       flash('Data Uploaded','success');
       return redirect()->back();
   }
   public function edit(Video $video)
   {
       return view('back.video.edit',compact('video'));
   }
   public function update(Request $request,Video $video)
   {
       $video->video = $request->video;
       $video->save();
       flash('Data Uploaded','success');
       return redirect()->back();
   }
   public function delete(Video $video)
   {
       $video->delete();
       flash('Data Deleted','success');
       return redirect()->back();
   }
}
