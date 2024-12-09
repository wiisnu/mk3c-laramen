<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'release_date',
        'image',
    ];

    protected $casts = [
        'release_date' => 'date',
    ];
}
