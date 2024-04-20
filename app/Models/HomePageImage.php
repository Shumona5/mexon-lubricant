<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomePageImage extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getFirstImageAttribute($value)
    {
        if($value){
            return Storage::url('/homeImage/'.$value);

        }
        return url('uploads/noImage.jpg');
    }
    public function getSecondImageAttribute($value)
    {
        if($value){
            return Storage::url('/homeImage/'.$value);

        }
        return url('uploads/noImage.jpg');
    }
    public function getThirdImageAttribute($value)
    {
        if($value){
            return Storage::url('/homeImage/'.$value);

        }
        return url('uploads/noImage.jpg');
    }

}
