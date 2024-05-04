<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BusinessPromotion;
use App\Models\EngineOil;
use App\Models\HomePageImage;
use App\Models\PromotionalItem;
use App\Models\Slider;
use App\Models\SubMexon;
use App\Models\WhyMexon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders=Slider::where('is_has_button','1')->get();
        $engines=EngineOil::all();
        $whyMexon=WhyMexon::first();
        $subMexons=SubMexon::all();
        $businessPromotion=BusinessPromotion::first();
        $homeImages=HomePageImage::first();
        $promotionalProducts=PromotionalItem::where('status','active')->get();
    return view('frontend.pages.index',compact('sliders','engines','whyMexon','subMexons','businessPromotion','homeImages','promotionalProducts'));    
    }

    public function privacyPolicy()
    {
    return view('frontend.privacy_policy');    
    }
}
