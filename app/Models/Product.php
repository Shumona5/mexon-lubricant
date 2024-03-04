<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getImageAttribute($value)
    {

        if ($value) {
            return Storage::url('/product/' . $value);
        }
        return url('/images/user.jpg');
    }

    public function service()
    {
        return $this->belongsTo(Service::class );
    }

}
