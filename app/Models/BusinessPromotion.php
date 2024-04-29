<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BusinessPromotion extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getImageAttribute($value)
    {
        if($value){
            return Storage::url('/businessPromotion/'.$value);

        }
        return url('uploads/user.jpg');
    }
}
