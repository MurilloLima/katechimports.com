<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    protected $fillable = [
        'token',
        'product_id',
        'name',
        'qtd',
        'price'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public static function order()
    {
        $data = Order::where('token', Session::get('token'))->get();
        return $data;
    }
}
