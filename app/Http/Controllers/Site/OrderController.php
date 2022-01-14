<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    private $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    public function addItem($product_id, Request $request)
    {
        $product = Product::find($product_id);
        if ($request->session()->has('token')) {
            $this->order->create([
                'token' => $request->session()->get('token'),
                'product_id' => $product_id,
                'name' => $product->name,
                'qtd' => 1,
                'price' => $product->price
            ]);
            alert()->success('Sucesso', 'Produto adicionado ao carrinho!');
        } else {
            $request->session()->put('token', Str::random(16));
            $this->order->create([
                'token' => $request->session()->get('token'),
                'product_id' => $product_id,
                'name' => $product->name,
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

    public function checkout(Request $request)
    {
        $products = NULL;
        $order_items = $this->order->where('token', $request->session()->get('token'))->get();
        foreach ($order_items as $item_id => $item) {
            $products .= $item->name . "%0a";
        }

        $data = "*PEDIDO ENVIADO*%0a%0a";
        $data .= $products;

        $data .= "Total: R$" . number_format($order_items->sum('price'), 2, ',', '.');

        $request->session()->forget('token');

        return redirect()->to("https://api.whatsapp.com/send?phone=559998202-3038" . "&text=" . $data);
    }

    public function checkoutFirst($product_id)
    {
        $order = Product::find($product_id);
        $data = "*PEDIDO ENVIADO*%0a%0a";
        $data .= $order->name . "%0a%0a";
        $data .= "Valor: R$" . number_format($order->sum('price'), 2, ',', '.');

        return redirect()->to("https://api.whatsapp.com/send?phone=559998202-3038" . "&text=" . $data);
        # code...
    }
}
