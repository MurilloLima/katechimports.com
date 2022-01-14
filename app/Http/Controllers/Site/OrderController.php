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

    public function checkout(Request $request)
    {
        $order_items = $this->order->where('token', $request->session()->get('token'))->get();
        foreach ( $order_items as $item_id => $item ) {
            $product = $item->product->name;  
                
        }

        $data = "*PEDIDO ENVIADO*%0a%0a";
        $data .= $item_id . "%0a";
        $data .= "Total: R$" . number_format($order_items->sum('price'), 2, ',', '.');

        // $dados .= "*PEDIDO ENVIADO*%0a*";
        // $dados .= "----------------------------------------%0a";
        // //$dados .= "*RESUMO DO PEDIDO*%0a";
        // $dados .= "*RESUMO DO PEDIDO*%0a%0a";
        // //$dados .= "Cód".$order->get_id()."%0a%0a";
        // $dados .= "Cód: " . 1 . "%0a%0a";
        // $dados .= "*PRODUTOS*%0a%0a";
        // // $dados .= $dados->product_id;
        // $dados .= "----------------------------------------%0a";
        // // $dados .= "*TOTAL* R$" . number_format($dados->sum('price'), 2, ',', '.') . "%0a%0a";
        // $dados .= "----------------------------------------%0a";
        // $dados .= "*DADOS DO CLIENTE%0a*";
        // $dados .= "*Nome:* " . $order->get_billing_first_name() . " " . $order->get_billing_last_name() . "%0a";
        // $dados .= "Endereço:* " . $order->get_billing_address_1() . " , " . $numero . " %0a";
        // $dados .= "*Cep:* " . $order->get_billing_postcode() . " %0a";
        // $dados .= "*Cidade:* " . $order->get_billing_city() . " %0a";
        // $dados .= "*Bairro:* " . $order->get_billing_address_2() . " %0a";
        // $dados .= "*Complemento:* " . $complemento . " %0a";
        // $dados .= "*Telefone/WhatsApp* " . $order->get_billing_phone() . " %0a";


        return redirect()->to("https://api.whatsapp.com/send?phone=5599991106799" . "&text=" . $data);
        # code...
    }

    public function checkoutFirst($product_id)
    {
        $order = Product::find($product_id);
        $data = "*PEDIDO ENVIADO*%0a%0a";
        $data .= $order->name . "%0a%0a";
        $data .= "Valor: R$" . number_format($order->sum('price'), 2, ',', '.');

        return redirect()->to("https://api.whatsapp.com/send?phone=5599991106799" . "&text=" . $data);
        # code...
    }
}
