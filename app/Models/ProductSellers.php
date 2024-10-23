<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSellers extends Model
{
    use HasFactory;

    protected $fillable = [
        'sellers_id',
        'product_category_id',
        'product_name',
        'description',
        'price',
        'stok_quantity',
        'image1_url',
        'image2_url',
        'image3_url'
    ]; 



    public function procatseller()
    {
        return $this->belongsTo(ProductCategoriesSeller::class, 'product_category_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategoriesSeller::class, 'product_category_id');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReviewsSellers::class);
    }

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }
}
