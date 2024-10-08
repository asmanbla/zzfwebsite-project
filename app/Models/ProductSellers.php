<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSellers extends Model
{
    use HasFactory;
    protected $fillable = [
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

    protected $primaryKey = 'id';
        public function products()
        {
            return $this->belongsTo(ProductSellers::class, 'product_category_id',
            'product_name',
            'description',
            'price',
            'stok_quantity',
            'image1_url',
            'image2_url',
            'image3_url');
        }
        
        public function category()
        {
            return $this->belongsTo(ProductCategoriesSeller::class, 'product_category_id');
        }
}
