<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'discount_price',
        'category_id'
    ];
    protected $table = 'products';
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function ProductColorSize(){
        return $this->hasMany(ProductColorSize::class,'product_id');
    }
    public function ProductColor(){
        return $this->hasMany(ProductColor::class,'product_id');
    }
    public function ProductSize(){
        return $this->hasMany(ProductSize::class,'product_id');
    }
}