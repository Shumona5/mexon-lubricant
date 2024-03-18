<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function transmission(){
        return view('frontend.pages.products.transmission.transmission');
    }

    public function memox()
    {
        return view('frontend.pages.products.transmission.memox');
    }
}
