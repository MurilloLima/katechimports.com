<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Helpers\Formated;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    private $order;
    private $formated;
    public function __construct(Order $order, Formated $formated)
    {
        $this->order = $order;
        $this->formated = $formated;
    }
    public function addItem($product_id, Request $request)
    {
        $product = Product::find($product_id);
        if ($request->session()->has('token')) {
            $this->order->create([
                'token' => $request->session()->get('token'),
                'product_id' => $product_id,
                'qtd' => 1,
                'price' => $product->price
            ]);
            alert()->success('Sucesso', 'Produto adicionado ao carrinho!');
        } else {
            $request->session()->put('token', Str::random(16));
            $this->order->create([
                'token' => $request->session()->get('token'),
                'product_id' => $product_id,
                'qtd' => 1,
                'price' => $product->price
            ]);
            alert()->success('Sucesso', 'Produto adicionado ao carrinho!');
        }
        return redirect()->back();
    }

    public function deleteItem($id)
    {
        $this->order->destroy($id);
        alert()->success('Sucesso', 'Produto removido do carrinho!');
        return redirect()->back();
        # code...
    }
}
