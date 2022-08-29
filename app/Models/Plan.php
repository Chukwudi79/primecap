<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'min_deposit',
        'max_deposit',
        'percent',
        'image_url',
    ];
}
