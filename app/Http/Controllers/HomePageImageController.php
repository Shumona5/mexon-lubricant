<?php

namespace App\Http\Controllers;

use App\Models\HomePageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomePageImageController extends Controller
{
    // public function list()
    // {
    //     $homeImages=HomePageImage::all();
    //     return view('backend.homeImage.list',compact('homeImages'));
    // }
    // public function create(){
    //     return view('backend.homeImage.create');
    // }
    // public function store(Request $request){
        
    //     $first_image = null;
    //     if ($request->hasFile('first_image')) {
    //         $first_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
    //         $request->file('first_image')->storeAs('/homeImage', $first_image);
    //     }
    //     $second_image = null;
    //     if ($request->hasFile('second_image')) {
    //         $second_image = date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
    //         $request->file('second_image')->storeAs('/homeImage', $second_image);
    //     }
    //     $third_image = null;
    //     if ($request->hasFile('third_image')) {
    //         $third_image = date('Ymdhsis') . '.' . $request->file('third_image')->getClientOriginalExtension();
    //         $request->file('third_image')->storeAs('/homeImage', $third_image);
    //     }
    //     HomePageImage::create([
    //         'first_image'=>$first_image,
    //         'second_image'=>$second_image,
    //         'third_image'=>$third_image,

    //     ]);
    //     notify()->success('Home Image Created Successfully');
    //     return redirect()->route('home.image');

    // }
    public function edit(){
        $homeImages=HomePageImage::first();
        return view('backend.homeImage.edit',compact('homeImages'));

    }
    public function createOrUpdate(Request $request){
        //  dd($request->all());
        $validate = Validator::make($request->all(), [
            'video'  => 'mimes:mp4,mov,ogg | max:20000'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $homeImages=HomePageImage::first();

      
            $first_image = $homeImages?$homeImages->getRawOriginal('first_image'):null;
            $second_image = $homeImages?$homeImages->getRawOriginal('second_image'):null;
            $third_image = $homeImages?$homeImages->getRawOriginal('third_image'):null;
            $video = $homeImages?$homeImages->getRawOriginal('video'):null;

        if ($request->hasFile('first_image')) {
            $remove = public_path().'/uploads/homeImage/'.$first_image;
            File::delete($remove);
            $first_image = 'first_image_'.date('Ymdhsis') . '.' . $request->file('first_image')->getClientOriginalExtension();
            $request->file('first_image')->storeAs('/homeImage', $first_image);
        }

        
        if ($request->hasFile('second_image')) {
            $remove = public_path().'/uploads/homeImage/'.$second_image;
            File::delete($remove);
            $second_image = 'second_image_'.date('Ymdhsis') . '.' . $request->file('second_image')->getClientOriginalExtension();
            $request->file('second_image')->storeAs('/homeImage', $second_image);
        }
        
        if ($request->hasFile('third_image')) {
            $remove = public_path().'/uploads/homeImage/'.$third_image;
            File::delete($remove);
            $third_image = 'third_image_'.date('Ymdhsis') . '.' . $request->file('third_image')->getClientOriginalExtension();
            $request->file('third_image')->storeAs('/homeImage', $third_image);
        }
       
        if ($request->hasFile('video')) {
            $remove = public_path().'/uploads/homeImage/'.$video;
            File::delete($remove);
            $video = 'video_'.date('Ymdhsis') . '.' . $request->file('video')->getClientOriginalExtension();
            $request->file('video')->storeAs('/homeImage', $video);
        }
        if($homeImages){

            $homeImages->update([
                'first_image' => $first_image,
                'second_image' => $second_image,
                'third_image' => $third_image,
                'video' => $video,
    
            ]);
        }else{
            HomePageImage::create([
                'first_image' => $first_image,
                'second_image' => $second_image,
                'third_image' => $third_image,
                'video' => $video,
            ]);
        }
        
        notify()->success('Home Image Updated Successfully');
        return redirect()->route('home.image');

    }
   
}
