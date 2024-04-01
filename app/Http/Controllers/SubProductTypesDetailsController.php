<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubProductTypesDetailsController extends Controller
{
    public function list(){
        return view('backend.subProductType.list');
    }
    public function create(){

    }
}
