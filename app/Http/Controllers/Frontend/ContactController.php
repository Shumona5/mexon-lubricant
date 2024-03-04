<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function list(){
        $writeUs = Contact::all();
        return view('backend.contact.list',compact('writeUs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        Contact::create([

            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'subject' => $request->subject,
            'body' => $request->message,
        ]);
        notify()->success('Form Created Successfully');
        return redirect()->back();
    }
}
