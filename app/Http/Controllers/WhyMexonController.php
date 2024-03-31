<?php

namespace App\Http\Controllers;

use App\Models\WhyMexon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WhyMexonController extends Controller
{
    

    public function editView(){

        $whyMexon=WhyMexon::first();
        return view('backend.whyMexon.edit',compact('whyMexon'));
    }

    public function createOrUpdate(Request $request){
        $validate = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $whyMexon=WhyMexon::first();
       if($whyMexon)
       {
        //if data exist then update 
        $whyMexon->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
       }else{
        //if no data then create
        WhyMexon::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
       }
        notify()->success('Why Mexon Updated Successfully');
        return redirect()->route('whyMexon.list');
    }
    
}
