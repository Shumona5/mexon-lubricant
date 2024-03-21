<?php

namespace App\Http\Controllers;

use App\Models\EngineOil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EngineOilController extends Controller
{
    public function list(){
        $engines=EngineOil::all();
        return view('backend.engine.list',compact('engines'));
    }
    public function create(){
        return view('backend.engine.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|unique:engine_oil',
            'description'=>'required'

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        EngineOil::create([
            'name'         => $request->name,
            'description'  =>$request->description

        ]);
        notify()->success('Engine Oil Created Successfully');
        return redirect()->route('engine.list');
    }

    public function edit($id){
        $engines=EngineOil::find($id);
        return view('backend.engine.edit',compact('engines'));
    }

    public function update(Request $request, $id){

    }
   

}
