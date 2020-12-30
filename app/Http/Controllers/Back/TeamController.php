<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('back.team.index',compact('teams'));
    }

    public function store(Request $request)
    {
        $team = new Team;
        $team->heading = $request->banner;
        $team->description = $request->description;
        $team->designation = $request->designation;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = $image->getClientOriginalName();
            $dbimagename = time() . $imagename;

            $destinationpath = 'public/uploads/' . $dbimagename;
            Image::make($image)->resize(440, 320)->save($destinationpath);

        }
        $team->image = $dbimagename;
        $team->save();
        flash('Data Uploaded ','success');
        return redirect()->back();


    }
    public function edit(Team $team)
    {
        return view('back.team.edit',compact('team'));
    }

    public function update (Request $request, Team $team)
    {
       
        $team->heading = $request->banner;
        $team->description = $request->description;
      $team->designation = $request->designation;
        $oldimage = $request->oldfile;
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $imagename = time().$image->getClientOriginalName();
            $destinationpath = "public/uploads/".$imagename;
            Image::make($image)->resize(440,320)->save($destinationpath);
            unlink('public/uploads/'.$oldimage);
            $team->image=$imagename;
            $team->save();
            flash('updated successfully','success');
            return redirect()->back();
        }
        $team->image=$oldimage;

        $team->save();
        flash('updated successfully','success');
        return redirect()->back();

    }
    public function delete (Team $team)
    {
        if(!$team->image==null){
            $image = $team->image;
            unlink('public/uploads/'.$image);
        }
        $team->delete();
        flash('Deleted Successfully','success');
        return redirect()->back();
    }
}
