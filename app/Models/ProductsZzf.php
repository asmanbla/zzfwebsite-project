<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsZzf extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_category_id',
        'product_name',
        'description',
        'type',
        'purchase_price',
        'rent_price',
        'stok_quantity',
        'image1_url',
        'image2_url',
        'image3_url'
    ]; 

    public function prodcatzzf()
    {
        return $this->belongsTo(ProductCategories::class, 'product_category_id');
    }

    protected $primaryKey = 'id';
        
        public function category()
        {
            return $this->belongsTo(ProductCategories::class, 'product_category_id');
        }

    protected $table = 'products_zzfs'; // Sesuaikan dengan tabel di database

    public function reviews()
    {
        return $this->hasMany(ProductReviews::class);
    }
}
