<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Diesel;
use App\Models\Gasoline;
use App\Models\Motorbike;
use App\Models\ProductTypesDetails;
use App\Models\SubProductTypesDetails;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function auto()
    { 
        $details=ProductTypesDetails::all();
        $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
        return view('frontend.pages.products.auto',compact('details','subdetails'));
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
        $diesel=Diesel::all();
        return view('frontend.pages.products.diesel',compact('diesel'));
    }
}
