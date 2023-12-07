<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'color',
        'category',
        'year',
        'price',
        'url',
    ];
}