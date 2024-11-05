<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sellers_id',
        'order_sellers_id',
        'sewa_sellers_id',
        'payment_date',
        'payment_method',
        'amount',
    ];
}