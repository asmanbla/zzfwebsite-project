<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client'; 

    protected $fillable = [
        'logo_url',
        'company_name',
        'documentation_url',
        'description',
    ];
}
