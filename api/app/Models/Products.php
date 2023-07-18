<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $hidden = ['brand_id','disabled'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function brand()
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class,RelCategoryProducts::class,'product_id','category_id')->where('disabled',0)->orderBy('category_id','asc');
    }
}
