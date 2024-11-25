<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    // Agrega 'page' a la propiedad fillable
    protected $fillable = [
        'page',
        'count',
    ];
}
