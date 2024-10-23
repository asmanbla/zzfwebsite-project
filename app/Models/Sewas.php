<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sellers_id',
        'customers_id',
        'start_date',
        'finish_date',
        'total_amount',
        'status',
    ];

    public function idseller()
    {
        return $this->belongsTo(Sellers::class, 'sellers_id');
    }
}
