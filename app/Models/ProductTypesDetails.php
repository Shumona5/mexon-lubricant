<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductTypesDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function getImageAttribute($value){
        if($value){
            return Storage::url('/productType/' . $value);
        }
        return url('/uploads/user.jpg');
    }
}
