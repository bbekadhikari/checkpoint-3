<?php

namespace App\Http\Controllers\Back;

use App\Document;
use App\Http\Controllers\Controller;
use App\Mail\sendmail;
use App\Vacancyform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class FormController extends Controller
{
    public function  index()
    {
        return view('front.form');
    }
    public function  indexback()
    {
        $forms = Vacancyform::orderBy('status','desc')->get();
        return view('back.form.index',compact('forms'));
    }
    public function store(Request $request)
    {


        $vacancy = new Vacancyform;

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentname = $document->getClientOriginalName();
            $dbdocumentname = time() . $documentname;
            $destinationpath = 'public/document/' . $dbdocumentname;
            $document->move('public/document/',$dbdocumentname);
        }
        if ($request->hasFile('signature')) {
            $signature = $request->file('signature');
            $signaturename = $signature->getClientOriginalName();
            $dbsignature=time().$signaturename;
            $destinationsignature ='public/uploads/'.$dbsignature;
            Image::make($signature)->resize(200,200)->save($destinationsignature);
            $vacancy->signature = $dbsignature;
        }


        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $profilename = $profile->getClientOriginalName();
            $dbprofile=time().$profilename;
            $destinationprofile ='public/uploads/'.$dbprofile;
            Image::make($profile)->resize(200,200)->save($destinationprofile);
            $vacancy->profile = $dbprofile;
        }


        if ($request->hasFile('citizenimage')) {
            $citizenimage = $request->file('citizenimage');
            $citizenimagename = $citizenimage->getClientOriginalName();
            $dbcitizenimage=time().$citizenimagename;
            $destinationcitizenimage ='public/uploads/'.$dbcitizenimage;
            Image::make($citizenimage)->resize(200,200)->save($destinationcitizenimage);
            $vacancy->citizenimage = $dbcitizenimage;
        }
        if ($request->hasFile('vouchar')) {
            $vouchar = $request->file('vouchar');
            $voucharname = $vouchar->getClientOriginalName();
            $dbvouchar=time().$voucharname;
            $destinationvouchar ='public/uploads/'.$dbvouchar;
            Image::make($vouchar)->resize(200,200)->save($destinationvouchar);
            $vacancy->vouchar = $dbvouchar;
        }



        $vacancy->document = $dbdocumentname;
        $vacancy->save();



        /* if($request->photo != null) {
            foreach ($request->photo as $item)
            {
                $img = Image::make($item['file']);
                $filename = 'img_' . date('sdHYim') . rand(1000, 9999) . '.jpg';
                $img->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save('public/uploads/' . $filename);

                $vacancy->citizenimage  = $filename;

            }
         }
         if($request->signature != null) {
            foreach ($request->signature as $item)
            {
                $img = Image::make($item['file']);
                $filename = 'img_' . date('sdHYim') . rand(1000, 9999) . '.jpg';
                $img->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save('public/uploads/' . $filename);

                $vacancy->signature  = $filename;

            }
         }
          if($request->photo != null) {
              foreach ($request->profile as $item)
              {
                  $img = Image::make($item['file']);
                  $filename = 'img_' . date('sdHYim') . rand(1000, 9999) . '.jpg';
                  $img->resize(1000, 1000, function ($constraint) {
                      $constraint->aspectRatio();
                      $constraint->upsize();
                  })->save('public/uploads/' . $filename);

                  $vacancy->profile  = $filename;

              }
          }
           if($request->photo != null) {
              foreach ($request->profile as $item)
              {
                  $img = Image::make($item['file']);
                  $filename = 'img_' . date('sdHYim') . rand(1000, 9999) . '.jpg';
                  $img->resize(1000, 1000, function ($constraint) {
                      $constraint->aspectRatio();
                      $constraint->upsize();
                  })->save('public/uploads/' . $filename);

                  $vacancy->profile  = $filename;

              }
          }
          if($request->bank != null) {

               foreach ($request->bank as $bank)
               {
                   $im = Image::make($bank['file']);
                   $filenames = 'img_' . date('sdHYim') . rand(1000, 9999) . '.jpg';
                   $im->resize(1000, 1000, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                   })->save('public/uploads/' . $filenames);

                   $vacancy->vouchar = $filenames;
               }




          }
   */


        $vacancy->fname = $request->fname;
        $vacancy->mname = $request->mname;
        $vacancy->lname = $request->lname;
        $vacancy->mfirstname = $request->mfirstname;
        $vacancy->mmiddlename = $request->middlenmae;
        $vacancy->mlastname = $request->mlastname;
        $vacancy->ffirstname = $request->ffirstname;
        $vacancy->fmiddlename = $request->fmiddlename;
        $vacancy->flastname = $request->flname;
        $vacancy->gfirstname = $request->gfirstname;
        $vacancy->gmiddlename = $request->gmiddlename;
        $vacancy->glastname = $request->glastname;
        $vacancy->fhusband_wife = $request->fhusband_wife;
        $vacancy->mhusband_wife = $request->mhusband_wife;
        $vacancy->lhusband_wife = $request->lhusband_wife;
        $vacancy->citizenno = $request->citizenno;
        $vacancy->issuedate = $request->issuedate;
        $vacancy->issuedistrict = $request->issuedistrict;
        $vacancy->email = $request->email;
        $vacancy->moblie = $request->mobile;
        $vacancy->othercast = $request->othercast;
        $vacancy->otherrelegion = $request->otherrelegion;
        $vacancy->otherrelegionforce = $request->otherrelegionforce;
        $vacancy->maritalstatus = $request->maritalstatus;
        $vacancy->employment = $request->employment;
        $vacancy->otheremployment = $request->otheremployment;
        $vacancy->motherlanguage = $request->motherlanguage;
        $vacancy->phychallanged = $request->physicallanged;
        $vacancy->typephychallanged = $request->typephychallanged;
        $vacancy->aboutyou = $request->aboutyou;
        $vacancy->aboutyouother = $request->aboutyouother;
        $vacancy->group = $request->group;
        $vacancy->othergroup = $request->othergroup;
        $vacancy->ndate = $request->ndate;
        $vacancy->edate = $request->edate;
        $vacancy->sex = $request->sex;
        $vacancy->fathereducation = $request->fathereducation;
        $vacancy->mothereducation = $request->mothereducation;
        $vacancy->other = $request->other;
        $vacancy->level = $request->level;
        $vacancy->groups = $request->groups;
        $vacancy->designation = $request->designation;
        $vacancy->aboutyou = $request->aboutyou;
        $vacancy->fmoccupation = $request->fmoccupation;
        $vacancy->aabedanmiti = $request->abadenmiti;
        $vacancy->anchal= $request->zone;
        $vacancy->zilla=$request->district;
        $vacancy->village=$request->village;
        $vacancy->bigyapan_no = $request->bigyapan;

        $vacancy->save();

        flash('Form successfully Submitted After Verifying You will Get admitcard on your E-mail thank you !!! ','success');
        return redirect()->back();


    }
    public function status (Request $request,Vacancyform $form)
    {

        $form->status = $request->status;
        $form->save();
        flash('Status Changed','success');
        if($form->status = 'confirm')
        {
            $data =array(
                'fname'=>$form->fname,
                'mname'=>$form->mname,
                'lname'=>$form->lname,
                'designation'=>$form->designation,
                'bigyapan'=>$form->bigyapanno,
                'abadenmiti'=>$form->abedanmiti,
                'anchal'=>$form->anchal,
                'zilla'=>$form->zilla,
                'village'=>$form->village,
                'mobile'=>$form->mobile,
                'image'=>$form->profile,
                'signature'=>$form->signature,
                'profile'=>$form->profile,
                'form'=>$form->id,
            );

            Mail::to($form->email)->send(new sendmail($data));

            flash('Mail Send','success');

        }

        return redirect()->back();
    }

    public function delete (Vacancyform $form)
    {

        $documents=Document::where('vacancyforms_id','=',$form->id)->get();

        foreach ($documents as $document)
        {
            @unlink('public/images/'.$document->image);
            $document->delete();
        }
        if (!empty($form->citizenimage))
        {
            @unlink('public/uploads/'.$form->citizenimage);
        }
        if (!empty($form->vouchar))
        {
            @unlink('public/uploads/'.$form->vouchar);
        }
        $form->delete();
        flash('Form removed Successfully.','success');
        return redirect()->back();
    }

    public function view(Vacancyform $form)
    {
        return view('back.candidate',compact('form'));
    }

    public function docs(Vacancyform $form)
    {
        $documents = Document::where('vacancyforms_id','=',$form->id)->get();
        return view('back.document',compact('documents'));
    }

    public function symbol(Request $request,Vacancyform $form)
    {

        $form->symbol = $request->symbol;
        $form->save();
        flash('symbol number added','success');
        return redirect()->back();
    }
}
