<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SubCategoryDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getImageAttribute($value)
    {
        if($value){
            return Storage::url('/subCategory/'. $value);
        }
        return url('/images/user.jpg');
    }
    
    public function getFirstImageAttribute($value)
    {
        if($value){
            return Storage::url('/subCategory/'. $value);
        }
        return url('/images/user.jpg');
    }
    public function getSecondImageAttribute($value)
    {
        if($value){
            return Storage::url('/subCategory/'. $value);
        }
        return url('/images/user.jpg');
    }
    public function getPdfImageAttribute($value)
    {
        if($value){
            return Storage::url('/subCategory/'. $value);
        }
        return url('/images/user.jpg');
    }
    public function getPdfAttribute($value)
    {
        if($value){
            return Storage::url('/subCategory/'. $value);
        }
        return url('/images/user.jpg');
    }

}
