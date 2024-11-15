<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestProduct extends Model
{
    use HasFactory;
    protected $table = 'best_products';

    protected $fillable = [
        'image_url',
        'name',
        'description',
    ];
}
