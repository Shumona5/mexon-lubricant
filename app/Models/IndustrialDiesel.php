<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class IndustrialDiesel extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getImageAttribute($value)
    {
        if ($value) {
            return Storage::url('/industrialDiesel/' . $value);
        }
        return url('/uploads/user.jpg');
    }
    public function getProductImageAttribute($value)
    {
        if ($value) {
            return Storage::url('/industrialDiesel/' . $value);
        }
        return url('/uploads/user.jpg');
    }
    
}
