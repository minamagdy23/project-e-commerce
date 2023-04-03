<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
         'color'
    ];
    protected $table = 'product_colors';
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function ProductColorSize(){
        return $this->hasMany(ProductColorSize::class,'product_id');
    }
}