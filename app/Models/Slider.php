<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'department_id',
        'image_url',
        'status'
    ];

    public function department()
    {
        return $this->belongsTo(Departments::class);
        # code...
    }
}
