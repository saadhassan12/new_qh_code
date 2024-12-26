<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductType extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['type_name', 'image_url' , 'product_category_id'];

    const CONSUMER_TYPE = '1';
    const PROFESSIONAL_TYPE = '2';

    public function products()
    {
        return $this->hasMany(Product::class, 'product_type_id');
    }

   public function getImageUrlAttribute($value)
   {
       if ($value) {
           return url(Storage::url('/images/products/' . $value));
       }
       return null;
   }

   public function specifications()
   {
       return $this->hasMany(Specification::class, 'product_type_id');
   }


}
