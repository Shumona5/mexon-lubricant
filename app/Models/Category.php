<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function parent()
    {
       return $this->belongsTo(Category::class,'parent_id','id');
    }

    public function childs(): HasMany

   {

       return $this->hasMany(__CLASS__, 'parent_id', 'id') ;

   }
}
