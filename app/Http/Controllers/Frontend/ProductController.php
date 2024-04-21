<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductsDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products=ProductsDetails::get();
        $mexonProduct=Product::first();
        return view('frontend.pages.products.product',compact('products','mexonProduct'));
    }
}
