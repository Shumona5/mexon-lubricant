<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubProductTypesDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubProductTypesDetailsController extends Controller
{
    public function list(){
        $details=SubProductTypesDetails::all();
        return view('backend.subProductType.list',compact('details'));
    }
    public function create(){
        $categories = Category::all();
        return view('backend.subProductType.create',compact('categories'));

    }
    public function store(Request $request)
    {
        
        $validate = Validator::make($request->all(), [
            'subtitle' => 'required',
            'category_id'=> 'required|numeric',
            'subtitle_name' => 'required',
            'status' => 'required',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = null;
        if ($request->hasFile('subtitle_image')) {
            $image = date('Ymdhsis') . '.' . $request->file('subtitle_image')->getClientOriginalExtension();
            $request->file('subtitle_image')->storeAs('/subproductType', $image);
        }
        SubProductTypesDetails::create([
            'subtitle'=>$request->subtitle,
            'subtitle_name'=>$request->subtitle_name,
            'subtitle_image'=>$image,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'button_url'=>$request->button_url,

        ]);
        notify()->success('Sub Product Created Successfully');
        return redirect()->route('subProducts.details.list');

    }
    public function edit($id)
    {
        $typeDetails=SubProductTypesDetails::find($id);
        $categories = Category::all();
        return view('backend.subProductType.edit',compact('typeDetails','categories'));
    }
    public function update(Request $request, $id){
        $typeDetails=SubProductTypesDetails::find($id);
        $validate = Validator::make($request->all(), [
            'subtitle' => 'required',
            'category_id'=> 'required|numeric',
            'subtitle_name' => 'required',
            'status' => 'required',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = $typeDetails->getRawOriginal('subtitle_image');
        if ($request->hasFile('subtitle_image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('subtitle_image')->storeAs('/subproductType', $image);
        }
        $typeDetails->update([
            'subtitle'=>$request->subtitle,
            'subtitle_name'=>$request->subtitle_name,
            'subtitle_image'=>$image,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'button_url'=>$request->button_url,
        ]);
        notify()->success('Sub Products Type Updated Successfully');
        return redirect()->route('subProducts.details.list');

    }
    public function delete($id)
    {
        $test = SubProductTypesDetails::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Sub Products Type Deleted Successfully');
            return redirect()->route('subProducts.details.list');
        } else {
            notify()->error('Sub Products Type Not Found');
            return redirect()->route('subProducts.details.list');
        }

    }
}
