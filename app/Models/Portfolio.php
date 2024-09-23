<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';
    public $timestamps = false; // Disable timestamps

    protected $casts = [
        'all_images' => 'array', // Cast the all_images attribute to an array
    ];
}
