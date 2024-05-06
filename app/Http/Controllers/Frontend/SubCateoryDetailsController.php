<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SubCategoryDetails;
use Illuminate\Http\Request;

class SubCateoryDetailsController extends Controller
{
    public function subCategory(){

        $subCategoryDetails=SubCategoryDetails::all();
        return view('frontend.pages.subCategoryDetails',compact('subCategoryDetails'));

    }
}
