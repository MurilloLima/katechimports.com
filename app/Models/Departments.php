<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = ['name', 'status', 'slug'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($user) { // before delete() method call this
            $user->products()->delete();
            $user->sliders()->delete();
        });
    }
}
