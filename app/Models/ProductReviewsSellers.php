<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviewsSellers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sellers_id',
        'customers_id',
        'products_id',
        'product_name',
        'rating',
        'comment'
    ];

    protected $primaryKey = 'id';

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customers_id'); // Mengacu pada kolom 'customers_id'
    }

    public function product()
    {
        return $this->belongsTo(ProductSellers::class, 'products_id'); // Mengacu pada kolom 'products_id'
    }

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }
}
