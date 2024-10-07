<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoriesSeller extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'kategori',];
}
