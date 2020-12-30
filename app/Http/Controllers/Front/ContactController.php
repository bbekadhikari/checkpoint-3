<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }
   public function bkindex()
   {
       $contacts = Contact::orderBy('status','desc')->get();
       return view('back.contact.index',compact('contacts'));
   }
    public function store(Request $request)
    {

        $contactpage = new Contact;
        $contactpage->name = $request->name;
        $contactpage->email = $request->email;
        $contactpage->Contact = $request->phone;
        $contactpage->message = $request->message;
        $contactpage->country = $request->country;
        $contactpage->save();

        flash('we will assist you soon','primary');

        return redirect()->back();
    }
    public function delete(Contact $contact)
    {
        $contact->delete();
        flash('Message Deleted','danger');
        return redirect()->back();
    }
    public function seen(Contact $contact,$view)
    {
        $contact->status =$view;
        $contact->save();
        flash('Message Seen','warning')->important();
      return view('back.contact.message',compact('contact'));
    }
}
