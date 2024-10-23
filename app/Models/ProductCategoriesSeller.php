<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoriesSeller extends Model
{
    use HasFactory;

    protected $fillable = [
        'sellers_id',  // Kolom yang bisa diisi oleh pengguna
        'kategori'
    ];

<<<<<<< HEAD
=======
    public function seller()
    {
        // Asumsikan model 'Seller' adalah yang benar, bukan 'Sellers'
        return $this->belongsTo(Seller::class, 'sellers_id');
    }
>>>>>>> 0ba2fa2d6c92d86dc4f6239152e448078125dd41
}
