<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsDetails;
use App\Models\Service;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class ProductController extends Controller
{
    public function list()
    {
        $mexonProduct=Product::first();
        $products=Product::all();  
       return view('backend.product.list', compact('products','mexonProduct'));
    }

    public function create()
    {
      
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        //Validator::make(request array,rules);

        $validate = Validator::make($request->all(), [

            'title1' => 'required',
            

        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }

        try {

            $image = null;
            if ($request->hasFile('image')) {
                $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/product', $image);
            }


            $mexonProduc = Product::create([
                
                'title1' => $request->title1,
                'title2' => $request->title2,
                'image' => $image,
            ]);

            notify()->success('Product Created Successfully');
            return redirect()->route('product.list');
        } catch (Exception $e) {
            // notify()->error($e->getMessage());
            notify()->error('This Product Can not Added');
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $mexonProduct=Product::first();
        return view('backend.product.edit', compact('mexonProduct'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $mexonProduct=Product::first();
        $validate = Validator::make($request->all(), [

            'title1' => 'required',

        ]);
        if ($validate->fails()) {
            // notify()->error($validate->getMessageBag());
            return redirect()->back()->withErrors($validate)->withInput();
        }


        $image = $mexonProduct->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/product', $image);
        }
         
        $mexonProduct->update([

            'title1' => $request->title1,
            'title2' => $request->title2,
            'image' => $image,
        ]);
        notify()->success('Product Updated Successfully');
        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        try{ 
         
        $test = Product::find($id);
        if ($test) {
            $test->delete();
            notify()->success('Product Deleted Successfully');
            return redirect()->route('product.list');
        }
     }
      catch(Throwable){
            notify()->error('This Product Cannot Be Deleted');
            return redirect()->route('product.list');
        }
    }

    public function subProductCreate(){
        return view('backend.sub-products.create');
    }

    public function subProductStore(Request $request){

        $validate = Validator::make($request->all(), [

            'subtitle_name' => 'required',
            'image' => 'required',
            'is_has_button' => 'required',

        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        try{
            $image = null;
            if ($request->hasFile('image')) {
                $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('/subProduct', $image);
            }

          $products=Product::create([
            'subtitle_name' => $request->subtitle_name,
            'description' => $request->description,
            'image' => $image,
            'is_has_button' => $request->is_has_button,
            'button_url' => $request->button_url,
            'design_pattern' => $request->design_pattern,

          ]);
         notify()->success('Sub Product Created Successfully');
         return redirect()->route('product.list');

        } catch (Exception $e) {
          
            notify()->error('This Product Can not Added');
            
            return redirect()->back();
        }
        

    }

    public function subProductEdit($id){
        $products=Product::find($id);
        return view('backend.sub-products.edit',compact('products'));
    }
    public function subProductUpdate(Request $request ,$id){

        $validate = Validator::make($request->all(), [

            'subtitle_name' => 'required',
            'image' => 'required',
            'is_has_button' => 'required',

        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }


        $products=Product::find($id);
        $image = $products->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/subProduct', $image);
        }
         
        $products->update([
            'subtitle_name' => $request->subtitle_name,
            'description' => $request->description,
            'image' => $image,
            'is_has_button' => $request->is_has_button,
            'button_url' => $request->button_url,
            'design_pattern' => $request->design_pattern,

        ]);

        notify()->success('Sub Product Updated Successfully');
        return redirect()->route('product.list');

    }

    public function subProductDelete($id){
        try{ 
         
            $test = Product::find($id);
            if ($test) {
                $test->delete();
                notify()->success('Sub Product Deleted Successfully');
                return redirect()->route('product.list');
            }
         }
          catch(Throwable){
                notify()->error('This Product Cannot Be Deleted');
                return redirect()->route('product.list');
            }

    }
}
