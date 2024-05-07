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

    
        
    }
}
