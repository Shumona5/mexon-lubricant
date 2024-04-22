<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Motorbike extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImageAttribute($value)
    {
        if ($value) {
            return Storage::url('/motorbike/' . $value);
        }
        return url('/images/user.jpg');
    }
    public function getFirstImageAttribute($value)
    {
        if ($value) {
            return Storage::url('/motorbike/' . $value);
        }
        return url('/images/user.jpg');
    }
    public function getSecondImageAttribute($value)
    {
        if ($value) {
            return Storage::url('/motorbike/' . $value);
        }
        return url('/images/user.jpg');
    }
}
