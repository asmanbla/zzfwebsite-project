<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'customers_id',
        'products_id',
        'rating',
        'comment',
    ];

    // Jika Anda ingin menghubungkan review dengan produk
    public function product()
    {
        return $this->belongsTo(ProductsZzf::class, 'products_id'); // Mengacu pada kolom 'products_id'
    }

    // Jika Anda ingin menghubungkan review dengan pelanggan
    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customers_id'); // Mengacu pada kolom 'customers_id'
    }
}
