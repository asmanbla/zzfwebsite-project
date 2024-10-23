<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsSewaSeller extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sellers_id',
        'sewa_sellers_id',
        'payment_date',
        'payment_method',
        'amount'
    ];

public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }

    public function sewa()
    {
        return $this->belongsTo(SewaSellers::class, 'sewa_sellers_id');
    }
}
