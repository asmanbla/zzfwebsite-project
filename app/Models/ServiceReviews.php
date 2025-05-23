<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceReviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customer_id',
        'name',
        'rating',
        'comment',
    ];
}
