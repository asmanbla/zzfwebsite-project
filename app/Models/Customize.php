<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customize extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'custom_date',
        'product'
    ];
}
