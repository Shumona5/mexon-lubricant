<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gasoline extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getImageAttribute($value)
    {

        if ($value) {
            return Storage::url('/gasoline/' . $value);
        }
        return url('/images/user.jpg');
    }
}
