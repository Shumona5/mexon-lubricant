<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductTypesDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ProductTypesDetailsController extends Controller
{
    public function list()
    {
        $details=ProductTypesDetails::all();
        return view('backend.productsType.list',compact('details'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('backend.productsType.create',compact('categories'));
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title1' => 'required',
            'category_id'=> 'required|numeric',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/productType', $image);
        }
        ProductTypesDetails::create([
            'title1'=>$request->title1,
            'title2'=>$request->title2,
            'image'=>$image,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,

        ]);
        notify()->success('Products Type Created Successfully');
        return redirect()->route('products.type.list');
    }
    public function edit($id)
    {
        $detail=ProductTypesDetails::find($id);
        $categories = Category::all();
        return view('backend.productsType.edit',compact('detail','categories'));
    }

    public function update(Request $request, $id){
        
        $detail=ProductTypesDetails::find($id);

        $validate = Validator::make($request->all(), [
            'title1' => 'required',
            'category_id'=> 'required|numeric',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = $detail->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/productType', $image);
        }
        $detail->update([
            'title1'=>$request->title1,
            'title2'=>$request->title2,
            'image'=>$image,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,

        ]);
        notify()->success('Product Types Updated Successfully');
        return redirect()->route('products.type.list');

    }

    public function delete($id){
        try{
            $test=ProductTypesDetails::find($id);
        if($test){
            $test->delete();
            notify()->success('Product Types Deleted Successfully');
            return redirect()->route('products.type.list');
        }
        
        }catch(Throwable){
            notify()->error('This Product Types cannot deleted');
            return redirect()->route('products.type.list');
        }
    }
    
}
