<?php

namespace App\Http\Controllers;

use App\Models\Diesel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DieselController extends Controller
{
    public function list()
    {
        $diesel=Diesel::all();
        return view('backend.diesel.list',compact('diesel'));
    }
    public function create(){
        return view('backend.diesel.create');

    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $diesel=Diesel::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $request->product_image,
            'pdf_image' => $request->pdf_image,
            'image' => $image,
            'status' => $request->status,
        ]);
        notify()->success('Diesel Created Successfully');
        return redirect()->route('diesel.list');
    }
    public function edit($id)
    {
        $diesel=Diesel::find($id);
        return view('backend.diesel.edit',compact('diesel'));
    }
    public function update(Request $request ,$id)
    {
        $diesel=Diesel::find($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = $diesel->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $diesel->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $request->product_image,
            'pdf_image' => $request->pdf_image,
            'image' => $image,
            'status' => $request->status,

        ]);
        notify()->success('Diesel Updated Successfully');
        return redirect()->route('diesel.list');

    }
    public function delete($id)
    {
        $test = Diesel::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Diesel Deleted Successfully');
            return redirect()->route('diesel.list');
        } else {
            notify()->error('Diesel Not Found');
            return redirect()->route('diesel.list');
        }

    }
    public function industrialDiesellist()
    {
        $industrialDiesel=Diesel::all();
        return view('backend.industrialDiesel.list',compact('industrialDiesel'));
    }
    public function industrialDieselcreate(){
        return view('backend.industrialDiesel.create');
    }
    public function industrialDieselstore(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $industrialDiesel=Diesel::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $request->product_image,
            'image' => $image,
            'status' => $request->status,
        ]);
        notify()->success('Industrial Diesel Created Successfully');
        return redirect()->route('industrial.diesel.list');

    }
    public function industrialDieseledit($id)
    {
        $industrialDiesel=Diesel::find($id);
        return view('backend.industrialDiesel.edit',compact('industrialDiesel'));
    }
    public function industrialDieselupdate(Request $request,$id)
    {
        $industrialDiesel=Diesel::find($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $image = $industrialDiesel->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $industrialDiesel->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $request->product_image,
            'pdf_image' => $request->pdf_image,
            'image' => $image,
            'status' => $request->status,

        ]);
        notify()->success('Industrial Diesel Updated Successfully');
        return redirect()->route('industrial.diesel.list');
    }
    public function industrialDieseldelete($id){
        $test = Diesel::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Industrial Diesel Deleted Successfully');
            return redirect()->route('industrial.diesel.list');
        } else {
            notify()->error('Industrial Diesel Not Found');
            return redirect()->route('industrial.diesel.list');
        }

    }
}
