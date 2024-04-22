<?php

namespace App\Http\Controllers;

use App\Models\Gasoline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GasolineController extends Controller
{
    public function list()
    {
        $gasolines=Gasoline::all();
        return view('backend.gasoline.list',compact('gasolines'));
    }
    public function create()
    {
        return view('backend.gasoline.create');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [

            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $first_image = null;
        if ($request->hasFile('first_image')) {
            $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/gasoline', $first_image);
        }
        $second_image = null;
        if ($request->hasFile('second_image')) {
            $second_image = date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/gasoline', $second_image);
        }
        $product_image = null;
        if ($request->hasFile('product_image')) {
            $product_image = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/gasoline', $product_image);
        }


        $gasolines=Gasoline::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'first_image' => $first_image,
            'second_image' => $second_image,
            'product_image' => $product_image,
            'status' => $request->status,
        ]);
        notify()->success('Gasoline Created Successfully');
        return redirect()->route('gasoline.list');


    }
    public function edit($id)
    {
        $gasolines=Gasoline::find($id);
        return view('backend.gasoline.edit',compact('gasolines'));
    }
    public function update(Request $request , $id)
    {

        $gasolines=Gasoline::find($id);
        $validate = Validator::make($request->all(), [

            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $first_image = $gasolines->getRawOriginal('first_image');
        if ($request->hasFile('first_image')) {
            $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/gasoline', $first_image);
        }
        $second_image = $gasolines->getRawOriginal('second_image');
        if ($request->hasFile('second_image')) {
            $second_image = date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/gasoline', $second_image);
        }
        $product_image = $gasolines->getRawOriginal('product_image');
        if ($request->hasFile('product_image')) {
            $product_image = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/gasoline', $product_image);
        }
        $gasolines->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'first_image' => $first_image,
            'second_image' => $second_image,
            'product_image' => $product_image,
            'status' => $request->status,

        ]);
        notify()->success('Gasoline Updated Successfully');
        return redirect()->route('gasoline.list');

    }
    public function delete($id)
    {
        $test = Gasoline::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Gasoline Deleted Successfully');
            return redirect()->route('gasoline.list');
        } else {
            notify()->error('Gasoline Not Found');
            return redirect()->route('gasoline.list');
        }
    }
}
