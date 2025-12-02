<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auto extends Model
   
{
   use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'merk',
        'model',
        'jaar',
        'kilometerstand',
        'prijs',
    ];
}
