<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gasoline extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getFirstImageAttribute($value)
    {

        if ($value) {
            return Storage::url('/gasoline/' . $value);
        }
        return url('/uploads/user.jpg');
    }
    public function getSecondImageAttribute($value)
    {

        if ($value) {
            return Storage::url('/gasoline/' . $value);
        }
        return url('/uploads/user.jpg');
    }
    public function getProductImageAttribute($value)
    {

        if ($value) {
            return Storage::url('/gasoline/' . $value);
        }
        return url('/uploads/user.jpg');
    }
}
