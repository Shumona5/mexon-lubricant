<?php

namespace App\Http\Controllers;

use App\Models\PromotionalItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromotionalItemController extends Controller
{
    public function list(){
        return view('backend.promotional-Item.list');
    }
    public function create(){
        return view('backend.promotional-Item.create');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'is_has_button' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/promotional', $image);
        }
        $item=PromotionalItem::create([
            'title' => $request->title,
            'image' => $image,
            'position' => $request->position,
            'status' => $request->status,
        ]);
        notify()->success('Promotional Item Created Successfully');
        return redirect()->route('promotional.list');


    }
}
