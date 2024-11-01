<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSellers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'carts_id',
        'sellers_id',
        'customers_id',
        'product_sellers_id',
        'order_date',
        'total_amount',
        'status'
    ];

    protected $primaryKey = 'id';
        

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }
    
    public function name()
    {
        return $this->belongsTo(Customers::class, 'customers_id');
    }

    public function productSellers()
    {
        return $this->belongsTo(ProductSellers::class, 'product_id');
    }

}
