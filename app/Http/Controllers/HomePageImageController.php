<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageImageController extends Controller
{
    public function list()
    {
        return view('backend.homeImage.list');
    }
    public function create(){
        return view('backend.homeImage.create');
    }
    public function store(Request $request){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){
        
    }
}
