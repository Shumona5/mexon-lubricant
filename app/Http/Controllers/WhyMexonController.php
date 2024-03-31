<?php

namespace App\Http\Controllers;

use App\Models\WhyMexon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WhyMexonController extends Controller
{
    public function list(){
        $whyMexon=WhyMexon::first();
        return view('backend.whyMexon.list',compact('whyMexon'));
    }

    public function create()
    {
        return view('backend.whyMexon.create');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [

            'name' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $whyMexon=WhyMexon::create([
            'name'=>$request->name,
            'description'=>$request->description

        ]);
        notify()->success('Why Mexon Created Successfully');
        return redirect()->route('whyMexon.list');

    }

    public function edit(){
        return view('backend.whyMexon.edit');
    }

    public function update(Request $request){
        $validate = Validator::make($request->all(), [

            'name' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $whyMexon=WhyMexon::first();
        $whyMexon->update([
            'name'=>$request->name,
            'description'=>$request->description

        ]);
        notify()->success('Why Mexon Updated Successfully');
        return redirect()->route('whyMexon.list');


    }
    public function delete(){

        $test =WhyMexon::first();
        if ($test) {
            $test->delete();
            notify()->success('Why Mexon Deleted Successfully');
            return redirect()->route('whyMexon.list');
        } else {
            notify()->error('Why Mexon Not Found');
            return redirect()->route('whyMexon.list');
        }

    }
}
