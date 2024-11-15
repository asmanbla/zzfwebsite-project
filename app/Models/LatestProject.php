<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestProject extends Model
{
    use HasFactory;
    protected $table = 'latest_projects';

    protected $fillable = [
        'image_url',
        'project_name',
        'description',
    ];
}
