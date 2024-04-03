<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MotorbikeController extends Controller
{
    public function list()
    {
        $motorbikes=Motorbike::all();
        return view('backend.motorbike.list',compact('motorbikes'));
    }
    public function create(){
        return view('backend.motorbike.create');
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [

            'title1' => 'required',
            'title2' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $motorbikes=Motorbike::create([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $request->first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $request->second_image,
            'image' => $request->image,
            'status' => $request->status,
        ]);
        notify()->success('Motorbike Created Successfully');
        return redirect()->route('motorbike.list');
    }
    public function edit($id){
        $motorbikes=Motorbike::find($id);
        return view('backend.motorbike.edit',compact('motorbikes'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [

            'title1' => 'required',
            'title2' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $motorbikes=Motorbike::find($id);
        $motorbikes->update([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $request->first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $request->second_image,
            'image' => $request->image,
            'status' => $request->status,

        ]);
        notify()->success('Motorbike Updated Successfully');
        return redirect()->route('motorbike.list');


    }
    public function delete($id)
    {
        $test = Motorbike::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Motorbike  Deleted Successfully');
            return redirect()->route('motorbike.list');
        } else {
            notify()->error('Motorbike  Not Found');
            return redirect()->route('motorbike.list');
        }
    }
}
