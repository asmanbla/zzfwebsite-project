<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaAdmin extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'biaya_admin';

    // Mass assignable attributes
    protected $fillable = [
        'order_sellers_id',
        'sewa_sellers_id',
        'percentage',
    ];

    /**
     * Relationship dengan model OrderSeller.
     */
    public function orderSeller()
    {
        return $this->belongsTo(OrderSeller::class, 'order_sellers_id');
    }

    /**
     * Relationship dengan model SewaSeller.
     */
    public function sewaSeller()
    {
        return $this->belongsTo(SewaSeller::class, 'sewa_sellers_id');
    }
}
