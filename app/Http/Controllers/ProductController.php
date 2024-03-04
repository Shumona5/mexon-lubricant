<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        if(\request()->search){
            $products=Product::where('name','LIKE','%'. \request()->search . '%')->with('service')->paginate(20);
        }else{
        $products = Product::with('service')->paginate(20);
        }
        return view('backend.product.list', compact('products'));
    }

    public function create()
    {
        $services = Service::all();
        return view('backend.product.create', compact('services'));
    }

    public function store(Request $request)
    {
        //Validator::make(request array,rules);

        $validate = Validator::make($request->all(), [

            'name'               => 'required',
            'service_id'        => 'required|numeric',
            'description'        => 'required',
            // 'quantity'           => 'required|numeric',
            'price'              => 'required|numeric|gt:0',
            // 'status'             => 'required'

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


            $products = Product::create([
                //t-shirt1,t-shirt2
                'name' => $request->name,
                'slug' => Str::slug($request->name).$request->service_id,
                'service_id' => $request->service_id,

                'description' => $request->description,
                'image' => $image,
                 'quantity' => 1,
                'price' => $request->price,
                'discount' => $request->discount,
                'discount_type' => $request->discount_type,


            ]);

            notify()->success('Product Created Successfully');
            return redirect()->route('product.list');
        } catch (Exception $e) {
            notify()->error($e->getMessage());
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $services = Service::all();
        return view('backend.product.edit', compact('products','services'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $products = Product::find($id);
        $validate = Validator::make($request->all(), [

            'name'               => 'required',
            'service_id'        => 'required|numeric',
            'description'        => 'required',
            // 'quantity'           => 'required|numeric',
            'price'              => 'required|numeric|gt:0',
            'status'             => 'required'

            // ],
            // [
            //     'name'       => 'Invalid format, Phone number should be like:01XXXXXXXXX'

        ]);
        if ($validate->fails()) {
            // notify()->error($validate->getMessageBag());
            return redirect()->back()->withErrors($validate)->withInput();
        }


        $image = $products->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/product', $image);
        }
         
        $products->update([

            'name' => $request->name,
            // 'slug' => Str::slug($request->name).$request->service_id,
            'service_id' => $request->service_id,
            'description' => $request->description,
            'image' => $image,
            // 'quantity' => $request->quantity,
            'price' => $request->price,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'status' => $request->status,
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
}
