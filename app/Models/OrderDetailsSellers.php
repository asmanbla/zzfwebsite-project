<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailsSellers extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (plural lowercase)
    protected $table = 'order_details_sellers';

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'id',
        'sellers_id',
        'product_sellers_id',
        'order_sellers_id',
        'quantity',
        'subtotal',
    ];

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }

    // Relasi dengan ProductSeller (produk penjual)
    public function produkseller()
    {
        return $this->belongsTo(ProductSellers::class, 'product_sellers_id');
    }

    // Relasi dengan OrderSeller (order penjual)
    public function orderseller()
    {
        return $this->belongsTo(OrderSellers::class, 'order_sellers_id');
    }
}
