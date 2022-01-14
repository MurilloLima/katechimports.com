<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'department_id',
        'name',
        'price',
        'cost_price',
        'descryption',
        'datasheet',
        'image_url',
        'status',
        'slug'
    ];

    public function department()
    {
        return $this->belongsTo(Departments::class);
    }

    public function galeries()
    {
        return $this->hasMany(Galery::class);
    }
}
