<?php

namespace App\Http\Controllers;

use App\Models\SubMexon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubMexonController extends Controller
{
    public function list()
    { 
        $mexons=SubMexon::all();
        return view('backend.subMexon.list',compact('mexons'));
    }
    public function create()
    {
       
        return view('backend.subMexon.create');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        SubMexon::create([
            'title'=>$request->title,
            'description'=>$request->description,

        ]);
        notify()->success('Sub Mexon Created Successfully');
        return redirect()->route('subMexon.list');

    }
    public function edit($id)
    {
        $submexon=SubMexon::find($id);
        return view('backend.subMexon.edit',compact('submexon'));
    }
    public function update(Request $request, $id){
        $submexon=SubMexon::find($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $submexon->update([
            'title'=>$request->title,
            'description'=>$request->description,

        ]);
        notify()->success('Sub Mexon Updated Successfully');
        return redirect()->route('subMexon.list');

    }
    public function delete($id)
    {
        $test=SubMexon::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Sub Mexon Deleted Successfully');
            return redirect()->route('subMexon.list');
        } else {
            notify()->error('Sub Mexon Not Found');
            return redirect()->route('subMexon.list');
        }
    }
    
}
