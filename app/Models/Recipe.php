<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time',
        'portions',
        'score',
        'main_img',
        'desc',
        'ingredients',
        'instruction',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'instruction' => 'array'
    ];
}
