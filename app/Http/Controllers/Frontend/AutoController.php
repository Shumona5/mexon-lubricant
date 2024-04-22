<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gasoline;
use App\Models\Motorbike;
use App\Models\ProductTypesDetails;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function auto()
    { 
        $details=ProductTypesDetails::all();
        return view('frontend.pages.products.auto',compact('details'));
    }

    public function motorbike()
    {
        $motorbikes=Motorbike::all();
        return view('frontend.pages.products.motorbike',compact('motorbikes'));
    }

    public function gasoline(){
        $gasolines=Gasoline::all();
        return view('frontend.pages.products.gasoline',compact('gasolines'));
    }

    public function diesel(){
        return view('frontend.pages.products.diesel');
    }
}
