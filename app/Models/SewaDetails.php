<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'products_zzfs_id',
        'sewas_id',
        'quantity',
        'subtotal',
    ];
}
