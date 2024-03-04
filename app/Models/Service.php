<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getIconAttribute($value)
    {

        if ($value) {
            return Storage::url('/services/' . $value);
        }
        return url('/images/user.jpg');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
