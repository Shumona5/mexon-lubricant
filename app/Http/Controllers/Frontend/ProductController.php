<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Motorbike;
use App\Models\Product;
use App\Models\ProductsDetails;
use App\Models\ProductTypesDetails;
use App\Models\SubCategoryDetails;
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
        $checkParent=Category::with('productTypeDetails','subProductTypesDetails')->where('parent_id',null)->where('slug',$slug)->first();
        if($checkParent)
        {
            
            return view('frontend.pages.products.auto', compact('checkParent'));
        }else {
            $category=Category::with('subCategoryDetails')->where('slug',$slug)->first();
          
            return view('frontend.pages.subCategoryDetails',compact('category'));
        }

    //     if ($slug == 'gasoline') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('frontend.pages.products.gasoline',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'diesel') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('frontend.pages.products.diesel',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'diesel-engine-2') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('frontend.pages.products.industrial-diesel',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'grease-2') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('frontend.pages.products.grease',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'transmission') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('frontend.pages.products.transmission.transmission',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'brake') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('',compact('details', 'subdetails'));
    //     }
    //     if ($slug == 'coolant') {
    //         $details = ProductTypesDetails::all();
    //         // $subdetails=SubProductTypesDetails::where('parent_id' , null)->get();
    //         $subdetails = SubProductTypesDetails::whereHas('subproducts', function ($query) {
    //             $query->where('parent_id', null);
    //         })->get();
    //         return view('',compact('details', 'subdetails'));
    //    }

        
    }
}
