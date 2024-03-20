<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders=Slider::all();
    return view('frontend.pages.index',compact('sliders'));    
    }

    public function privacyPolicy()
    {
    return view('frontend.privacy_policy');    
    }
}
