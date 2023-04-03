<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_color_size_id',
        'image'
    ];
    protected $table = 'product_images';
    public function ProductColorSize(){
        return $this->belongsTo(ProductColorSize::class);
    }
}
