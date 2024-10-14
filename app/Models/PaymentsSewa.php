<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsSewa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sewas_id',
        'payment_date',
        'payment_method',
        'amount',
    ];
}
