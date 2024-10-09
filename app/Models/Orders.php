<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customers_id',
        'order_date',
        'total_amount',
        'status',
    ];

    protected $primaryKey = 'id';
        
    public function name()
    {
        return $this->belongsTo(Customers::class, 'customers_id');
    }

}
