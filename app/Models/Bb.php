<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    // use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'price'
    ];
}
