<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customer_id',
        'products_sellers_id',
        'purchase_price',
        'rent_price',
        'quantity',
        'total',
        'endtotal',
        'status_cart',
        'action',
    ];

    public function product()
    {
        return $this->belongsTo(productSellers::class, 'products_sellers_id');
    }

    public function productSellers()
    {
        return $this->belongsTo(ProductSellers::class, 'products_sellers_id'); // Ubah menjadi ProductSellers
    }
}
