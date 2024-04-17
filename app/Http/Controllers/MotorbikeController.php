<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $first_image = null;
        if ($request->hasFile('first_image')) {
            $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/motorbike', $first_image);
        }
        $second_image = null;
        if ($request->hasFile('second_image')) {
            $second_image = date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/motorbike', $second_image);
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/motorbike', $image);
        }

        $motorbikes=Motorbike::create([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $second_image,
            'image' => $image,
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
        $motorbikes=Motorbike::find($id);
        $validate = Validator::make($request->all(), [

            'title1' => 'required',
            'title2' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $first_image = $motorbikes->getRawOriginal('first_image');
        if ($request->hasFile('first_image')) {
            $remove = public_path().'/uploads/motorbike/'.$first_image;
            File::delete($remove);
            $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/motorbike', $first_image);
        }

        $second_image = $motorbikes->getRawOriginal('second_image');
        if ($request->hasFile('second_image')) {
            $remove = public_path().'/uploads/motorbike/'.$second_image;
            File::delete($remove);
            $second_image = date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/motorbike', $second_image);
        }
        $image = $motorbikes->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $remove = public_path().'/uploads/motorbike/'.$image;
            File::delete($remove);
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/motorbike', $image);
        }
    
        $motorbikes->update([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $second_image,
            'image' => $image,
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
