<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategoryDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Throwable;

class SubCategoryDetailsController extends Controller
{
    public function list(){

        $subcategory=SubCategoryDetails::all();
        return view('backend.subCategory.list',compact('subcategory'));

    }
    public function create()
    {
        $categories=Category::all();
        return view('backend.subCategory.create',compact('categories'));
    }

    public function store(Request $request){
        $validate = Validator::make($request->all(), [

            'title1' => 'required',
            
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        try{
        $first_image = null;
        if ($request->hasFile('first_image')) {
            $first_image = 'first_image_'.date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/subCategory', $first_image);
        }
        $second_image = null;
        if ($request->hasFile('second_image')) {
            $second_image = 'second_image_'.date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/subCategory', $second_image);
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = 'image_'.date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/subCategory', $image);
        }
        $pdf_image = null;
        if ($request->hasFile('pdf_image')) {
            $pdf_image = 'pdf_image_'.date('Ymdhsis') . '.' . $request->file('pdf_image')->getClientOriginalExtension();
            $request->file('pdf_image')->storeAs('/subCategory', $pdf_image);
        }
        $pdf = null;
        if ($request->hasFile('pdf')) {
            $pdf = 'pdf_'.date('Ymdhsis') . '.' . $request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('/subCategory', $pdf);
        }

        $subcategory=SubCategoryDetails::create([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $second_image,
            'image' => $image,
            'pdf_image' => $pdf_image,
            'pdf' => $pdf,
            'category_id'=>$request->category_id,
            'status' => $request->status,

        ]);
        notify()->success('Sub Category Details Created Successfully');
        return redirect()->route('subCategory.list');

     } catch(Throwable){
        notify()->error('This SubCategory Details Cannot Be Added');
        return redirect()->route('subCategory.list');
     }

    }

    public function edit($id)
    {
        $subcategory=SubCategoryDetails::find($id);
        $categories=Category::all();
        return view('backend.subCategory.edit',compact('subcategory','categories'));
    }

    public function update(Request $request ,$id){
    
        $subcategory=SubCategoryDetails::find($id);
        $validate = Validator::make($request->all(), [

            'title1' => 'required',
          
            'status' => 'required',
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        $first_image = $subcategory->getRawOriginal('first_image');
        if ($request->hasFile('first_image')) {
            $remove = public_path().'/uploads/subCategory/'.$first_image;
            File::delete($remove);
            $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/subCategory', $first_image);
        }

        $second_image = $subcategory->getRawOriginal('second_image');
        if ($request->hasFile('second_image')) {
            $remove = public_path().'/uploads/subCategory/'.$second_image;
            File::delete($remove);
            $second_image = date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/subCategory', $second_image);
        }
        $image = $subcategory->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $remove = public_path().'/uploads/subCategory/'.$image;
            File::delete($remove);
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/subCategory', $image);
        }
        $pdf_image = $subcategory->getRawOriginal('pdf_image');
        if ($request->hasFile('pdf_image')) {
            $remove = public_path().'/uploads/subCategory/'.$pdf_image;
            File::delete($remove);
            $pdf_image = date('Ymdhsis') . '.' . $request->file('pdf_image')->getClientOriginalExtension();
            $request->file('pdf_image')->storeAs('/subCategory', $pdf_image);
        }
        $pdf = $subcategory->getRawOriginal('pdf');
        if ($request->hasFile('pdf')) {
            $remove = public_path().'/uploads/subCategory/'.$pdf;
            File::delete($remove);
            $pdf = date('Ymdhsis') . '.' . $request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('/subCategory', $pdf);
        }
    
        $subcategory->update([
            'title1' => $request->title1,
            'first_short_description' => $request->first_short_description,
            'first_long_description' => $request->first_long_description,
            'first_image' => $first_image,
            'title2' => $request->title2,
            'second_short_description' => $request->second_short_description,
            'second_long_description' => $request->second_long_description,
            'second_image' => $second_image,
            'image' => $image,
            'pdf_image' => $pdf_image,
            'pdf' => $pdf,
            'category_id'=>$request->category_id,
            'status' => $request->status,

        

        ]);
        notify()->success('Sub Category Details Updated Successfully');
        return redirect()->route('subCategory.list');


    }
    public function delete($id){
        $test = SubCategoryDetails::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Sub Category Deleted Successfully');
            return redirect()->route('subCategory.list');
        } else {
            notify()->error('Sub Category Not Found');
            return redirect()->route('subCategory.list');
        }
    }
}
