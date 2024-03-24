<?php

namespace App\Http\Controllers;

use App\Models\BusinessPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessPromotionController extends Controller
{
    public function list(){
        $businessPromotion=BusinessPromotion::all();
        return view('backend.business-promotion.list',compact('businessPromotion'));
    }

    public function create(){
        return view('backend.business-promotion.create');
    }

    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'long_description' => 'required',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        BusinessPromotion::create([
            'title' => $request->title,
            'long_description' => $request->long_description,

        ]);
        notify()->success('Business Promotion Added Successfully');
        return redirect()->route('businessPromotion.list');
}
    public function edit($id){
        $businessPromotion=BusinessPromotion::find($id);
        return view('backend.business-promotion.edit',compact('businessPromotion'));

    }
    public function update(Request $request, $id){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'long_description' => 'required',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $businessPromotion=BusinessPromotion::find($id);
        $businessPromotion->update([
            'title' => $request->title,
            'long_description' => $request->long_description,

        ]);
        notify()->success('Business Promotion Updated Successfully');
        return redirect()->route('businessPromotion.list');


    }
    public function delete($id)
    {
        $test =BusinessPromotion::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Business Promotion Deleted Successfully');
            return redirect()->route('businessPromotion.list');
        } else {
            notify()->error('Business Promotion Not Found');
            return redirect()->route('businessPromotion.list');
        }
    }
}
