<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\IndustrialDiesel;
use Illuminate\Http\Request;

class IndustrialController extends Controller
{
    public function industrial()
    {
        return view('frontend.pages.products.industrial');
    }

    public function diesel(){
        $industrialDiesel=IndustrialDiesel::all();
        return view('frontend.pages.products.industrial-diesel',compact('industrialDiesel'));
    }

    public function grease()
    {
        return view('frontend.pages.products.grease');
    }
}
