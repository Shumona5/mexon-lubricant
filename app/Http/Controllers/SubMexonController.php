<?php

namespace App\Http\Controllers;

use App\Models\SubMexon;
use Illuminate\Http\Request;

class SubMexonController extends Controller
{
    public function list()
    {
        return view('backend.subMexon.list');
    }
    public function create()
    {
        $mexons=SubMexon::all();
        return view('backend.subMexon.create',compact('mexons'));
    }
    public function store(Request $request){

    }
}
