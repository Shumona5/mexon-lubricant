<?php

namespace App\Http\Controllers;

use App\Models\BusinessPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessPromotionController extends Controller
{
    
    public function edit(){
        $businessPromotion=BusinessPromotion::first();
        return view('backend.business-promotion.edit',compact('businessPromotion'));

    }
    public function createOrUpdate(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'long_description' => 'required',
            
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $businessPromotion=BusinessPromotion::first();
        if($businessPromotion){
            // if data exist then update
            $businessPromotion->update([
                'title' => $request->title,
                'long_description' => $request->long_description,
            ]);

        }else{
            // if no data then create
            BusinessPromotion::create([
                'title' => $request->title,
                'long_description' => $request->long_description,
            ]);
        }
        
        notify()->success('Business Promotion Updated Successfully');
        return redirect()->route('businessPromotion.list');


    }
   
}
