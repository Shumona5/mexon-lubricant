<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SubProductTypesDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getSubtitleImageAttribute($value)
    {
        if($value){
           
            return Storage::url('/subproductType/' .$value);
        }
        return url('/uploads/user.jpg');
    }
}
