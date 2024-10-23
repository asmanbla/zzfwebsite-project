<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsSellers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sellers_id',
        'order_sellers_id',
        'payment_date',
        'payment_method',
        'amount'
    ];

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }

    public function order()
    {
        return $this->belongsTo(OrderSellers::class, 'order_sellers_id');
    }
}
