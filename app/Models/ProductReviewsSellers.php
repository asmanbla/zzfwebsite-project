<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviewsSellers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customers_id',
        'products_id',
        'product_name',
        'rating',
        'comment'
    ];


    protected $primaryKey = 'id';
        
    public function name()
    {
        return $this->belongsTo(Customers::class, 'customers_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductSellers::class, 'id');
    }
}
