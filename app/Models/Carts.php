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
        'products_zzfs_id',
        'products_sellers_id',
        'quantity',
        'total',
        'endtotal',
        'action',
    ];

    public function product()
    {
        return $this->belongsTo(ProductsZzf::class, 'products_zzfs_id');
    }

    public function productSellers()
    {
        return $this->belongsTo(ProductSellers::class, 'products_sellers_id'); // Ubah menjadi ProductSellers
    }
}
