<?php

namespace App\Http\Controllers;

use App\Models\PromotionalItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromotionalItemController extends Controller
{
    public function list(){
        $promotionalProducts=PromotionalItem::all();
        return view('backend.promotional-Item.list',compact('promotionalProducts'));
    }
    public function create(){
        return view('backend.promotional-Item.create');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'position' => 'required',
            'status' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/promotionalItem', $image);
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
    public function edit($id){
        $promotionalProduct=PromotionalItem::find($id);
        return view('backend.promotional-Item.edit',compact('promotionalProduct'));
    }
    public function update(Request $request, $id){
        $promotionalProduct=PromotionalItem::find($id);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'position' => 'required',
            'status' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $image = $promotionalProduct->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/promotionalItem', $image);
        }

        $promotionalProduct->update([
            'title' => $request->title,
            'image' => $image,
            'position' => $request->position,
            'status' => $request->status,

        ]);
        notify()->success('Promotional Product Updated Successfully');
        return redirect()->route('promotional.list');
    }
    public function delete($id)
    {
        $promotionalProduct=PromotionalItem::find($id);
        if($promotionalProduct){
            $promotionalProduct->delete();
            notify()->success('Promotional Products Deleted Successfully');
            return redirect()->route('promotional.list');
        }
        else{
            notify()->error('This Product Cannot Delete');
            return redirect()->route('promotional.list');
        }
    }
}
