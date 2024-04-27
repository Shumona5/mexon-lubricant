<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductsDetails;
use App\Models\ProductTypesDetails;
use App\Models\SubProductTypesDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = ProductsDetails::get();
        $mexonProduct = Product::first();
        return view('frontend.pages.products.product', compact('products', 'mexonProduct'));
    }

    public function getProductByCategorySlug($slug)
    {

        if ($slug == 'automotive') {
            $details = ProductTypesDetails::all();
            // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
            $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
                $query->where('parent_id', null);
            })->get();
            return view('frontend.pages.products.auto', compact('details', 'subdetails'));
        }

        
    }
}
