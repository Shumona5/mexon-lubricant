<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function auto()
    {
        return view('frontend.pages.products.auto');
    }

    public function motorbike()
    {
        return view('frontend.pages.products.motorbike');
    }

    public function gasoline(){
        return view('frontend.pages.products.gasoline');
    }

    public function diesel(){
        return view('frontend.pages.products.diesel');
    }
}
