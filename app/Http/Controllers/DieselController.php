<?php

namespace App\Http\Controllers;

use App\Models\Diesel;
use App\Models\IndustrialDiesel;
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
            
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $product_image = null;
        if ($request->hasFile('product_image')) {
            $product_image = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/diesel', $product_image);
        }

        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $pdf_image = null;
        if ($request->hasFile('pdf_image')) {
            $pdf_image = date('Ymdhsis') . '.' . $request->file('pdf_image')->getClientOriginalExtension();
            $request->file('pdf_image')->storeAs('/diesel', $pdf_image);
        }
        $pdf = null;
        if ($request->hasFile('pdf')) {
            $pdf = date('Ymdhsis') . '.' . $request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('/diesel', $pdf);
        }
        $diesel=Diesel::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $product_image,
            'pdf_image' => $pdf_image,
            'image' => $image,
            'pdf_image' => $pdf_image,
            'pdf' => $pdf,
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
           
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $product_image = $diesel->getRawOriginal('product_image');
        if ($request->hasFile('product_image')) {
            $product_image = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/diesel', $product_image);
        }
        $image = $diesel->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/diesel', $image);
        }
        $pdf_image = $diesel->getRawOriginal('pdf_image');
        if ($request->hasFile('pdf_image')) {
            $pdf_image = date('Ymdhsis') . '.' . $request->file('pdf_image')->getClientOriginalExtension();
            $request->file('pdf_image')->storeAs('/diesel', $pdf_image);
        }
        $pdf = $diesel->getRawOriginal('pdf');
        if ($request->hasFile('pdf')) {
            $pdf = date('Ymdhsis') . '.' . $request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('/diesel', $pdf);
        }
        $diesel->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $product_image,
            'pdf_image' => $pdf_image,
            'image' => $image,
            'pdf_image' => $pdf_image,
            'pdf' => $pdf,
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
        $industrialDiesel=IndustrialDiesel::all();
        return view('backend.industrialDiesel.list',compact('industrialDiesel'));
    }
    public function industrialDieselcreate(){
        return view('backend.industrialDiesel.create');
    }
    public function industrialDieselstore(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $product_image = null;
        if ($request->hasFile('product_image')) {
            $product_image = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/industrialDiesel', $product_image);
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/industrialDiesel', $image);
        }
        $industrialDiesel=IndustrialDiesel::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $product_image,
            'image' => $image,
            'status' => $request->status,
        ]);
        notify()->success('Industrial Diesel Created Successfully');
        return redirect()->route('industrial.diesel.list');

    }
    public function industrialDieseledit($id)
    {
        $industrialDiesel=IndustrialDiesel::find($id);
        return view('backend.industrialDiesel.edit',compact('industrialDiesel'));
    }
    public function industrialDieselupdate(Request $request,$id)
    {
        $industrialDiesel=IndustrialDiesel::find($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $productImage = $industrialDiesel->getRawOriginal('product_image');
        if ($request->hasFile('product_image')) {
            $productImage = date('Ymdhsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/industrialDiesel', $productImage);
        }

        $image = $industrialDiesel->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/industrialDiesel', $image);
        }
        $industrialDiesel->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'product_image' => $productImage,
            'image' => $image,
            'status' => $request->status,

        ]);
        notify()->success('Industrial Diesel Updated Successfully');
        return redirect()->route('industrial.diesel.list');
    }
    public function industrialDieseldelete($id){
        $test = IndustrialDiesel::find($id);
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
