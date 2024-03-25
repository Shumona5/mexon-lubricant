<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        if (\request()->search) {
            $categories = Category::with('parent')->where('name','LIKE','%'.\request()->search.'%')->orderBy('position')->get();
            }else{
    
                $categories = Category::with('parent')->orderBy('position')->get();
            }
        return view('backend.category.list',compact('categories'));
    }

    public function create()
    {
        $parents=Category::where('parent_id',null)->get();
        return view('backend.category.create',compact('parents'));
    }

    public function store(Request $request){
       
        $validator = Validator::make($request->all(), [
            'name'  => 'required|unique:categories',
            'image' => 'required|image',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = null;
        if ($request->hasFile('image')) {
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/category', $image);
        }
        Category::create([
            'name'  => $request->name,
            'image' => $image,
            'slug'  => Str::slug($request->name),
            'parent_id'  => $request->parent_id,
            'position'  => $request->position,
        ]);

        notify()->success('Category Created Successfully');
        return redirect()->route('category.list');


    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $parents=Category::where('parent_id',null)->get();
        return view('backend.category.edit',compact('category','parents'));

    }

    public function update(Request $request, $slug)
    {
        $category   = Category::where('slug', $slug)->first();
        $validator  = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $category->getRawOriginal('image');
        if ($request->hasFile('image')) {
            $remove = public_path().'/uploads/category/'.$image;
            File::delete($remove);
            $image = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/category', $image);
        }

        $slug   = Str::slug($request->name, '-');
        $count  = Category::where('slug', $slug)->count();
        if ($count) {
            $slug = $slug . '-' . ($count + 1);
        }
        $category->update([
            'name'  => $request->name,
            'image' => $image,
            'slug'  => $slug,
            'parent_id'  => $request->parent_id,
            'position'  => $request->position,
        ]);
        notify()->success('Category updated successfully');
        return redirect()->route('backend.category.list');
    }

    public function delete($slug)
    {
        try {
            Category::where('slug', $slug)->first()->delete();
            notify()->success('Category deleted successfully');
        } catch (\Throwable $th) {
            // notify()->error($th->getMessage());
            notify()->error('This category cannot be deleted');
        }
        return to_route('category.index');
    }

   
}
