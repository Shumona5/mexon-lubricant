<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomotiveController extends Controller
{
    public function list()
    {
        $automotives=AutomotiveController::all();
        return view('backend.automotive.list');
    }

    public function create(){
        return view('backend.automotive.create');
    }
}
