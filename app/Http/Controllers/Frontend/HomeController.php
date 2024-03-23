<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EngineOil;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders=Slider::all();
        $engines=EngineOil::all();
    return view('frontend.pages.index',compact('sliders','engines'));    
    }

    public function privacyPolicy()
    {
    return view('frontend.privacy_policy');    
    }
}
