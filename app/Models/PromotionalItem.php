<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PromotionalItem extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImageAttribute($value){
        if($value){
            return Storage::url('/promotionalItem/' . $value);
        }
        return url('/uploads/user.jpg');
    }
}
