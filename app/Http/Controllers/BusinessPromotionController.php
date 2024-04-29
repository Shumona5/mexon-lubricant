<?php

namespace App\Http\Controllers;

use App\Models\BusinessPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $businessPromotion=BusinessPromotion::first();
        $image = $businessPromotion?$businessPromotion->getRawOriginal('image'):null;
        if ($request->hasFile('image')) {
            $remove = public_path().'/uploads/businessPromotion/'.$image;
            File::delete($remove);
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/businessPromotion', $image);
        }

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
