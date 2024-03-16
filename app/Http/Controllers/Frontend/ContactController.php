<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
         // Need validation

         $validator=Validator::make($request->all(),[
            'name' =>'required|max:255',
            'email'=>'required'

         ]);


        // Send Email
       
        Mail::to('info@mexon.org')->send(new ContactMail($request->all()));

        // query run using object....
        // $xyz=new Contact();
        // $xyz->create([

        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'location' => $request->location,
        //     'engine-type' => $request->type,
        //     'engine-model' => $request->model,
        //     'official-warranty' => $request->warranty,
        //     'body' => $request->message,
        // ]);
        Contact::create([

            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'engine-type' => $request->type,
            'engine-model' => $request->model,
            'official-warranty' => $request->warranty,
            'body' => $request->message,
        ]);
        notify()->success('Form Created Successfully');
        return redirect()->back();
    }
}
