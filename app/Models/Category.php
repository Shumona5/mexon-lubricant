<?php

namespace App\Models;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function productTypeDetails()
    {
        return $this->hasOne(ProductTypesDetails::class, 'category_id');
    }


    public function subProductTypesDetails()
    {
        return $this->hasMany(SubProductTypesDetails::class, 'category_id');
    }

    public function subCategoryDetails(){
        return $this->hasMany(SubCategoryDetails::class,'category_id');
    }


    public function getImageAttribute($value): string|UrlGenerator|Application
    {
        if ($value) {
            return Storage::url('/category/' . $value);
        }
        return url('images/user.jpg');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function childs(): HasMany
    {

        return $this->hasMany(__CLASS__, 'parent_id', 'id');
    }
}
