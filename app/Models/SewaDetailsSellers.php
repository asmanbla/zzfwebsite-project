<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaDetailsSellers extends Model
{
    use HasFactory;
    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (plural lowercase)
    protected $table = 'sewa_details_sellers';

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'product_sellers_id',
        'sewa_sellers_id',
        'quantity',
        'subtotal',
    ];

    // Relasi dengan ProductSeller (produk penjual)
    public function produkseller()
    {
        return $this->belongsTo(ProductSellers::class, 'product_sellers_id');
    }

    // Relasi dengan sewaSeller (sewa penjual)
    public function sewa()
    {
        return $this->belongsTo(SewaSellers::class, 'sewa_sellers_id');
    }

}
