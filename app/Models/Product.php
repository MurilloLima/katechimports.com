<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'department_id',
        'name',
        'price',
        'descryption',
        'image_url',
        'status',
        'slug'
    ];
}
