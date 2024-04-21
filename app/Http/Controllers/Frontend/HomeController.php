<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BusinessPromotion;
use App\Models\EngineOil;
use App\Models\Slider;
use App\Models\SubMexon;
use App\Models\WhyMexon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders=Slider::all();
        $engines=EngineOil::all();
        $whyMexon=WhyMexon::first();
        $subMexons=SubMexon::all();
        $businessPromotion=BusinessPromotion::first();
    return view('frontend.pages.index',compact('sliders','engines','whyMexon','subMexons','businessPromotion'));    
    }

    public function privacyPolicy()
    {
    return view('frontend.privacy_policy');    
    }
}
