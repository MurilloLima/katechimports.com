<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailNewsLetter;
use App\Models\Departments;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $product;
    private $department;
    public function __construct(Product $product, Departments $department)
    {
        $this->product = $product;
        $this->department = $department;
    }

    public function index()
    {
        $sliders = Slider::orderby('created_at', 'desc')->where('status', 'Ativo')->get();
        $products1 = $this->product->orderby('created_at', 'desc')->skip(0)->take(8)->get();
        $products2 = $this->product->orderby('created_at', 'desc')->skip(8)->take(8)->get();
        $departmentFooter = $this->department->where('status', 'menu')->orderby('name', 'desc')->skip(0)->take(5)->get();
        return view('site.index', compact('sliders', 'products1', 'products2', 'departmentFooter'));
    }

    public function product_details($slug)
    {
        $data = $this->product->where('slug', $slug)->first();
        $related = $this->product->where('department_id', $data->department_id)->get();
        return view('site.pages.product-details', compact('data', 'related'));
    }

    public function newsletter()
    {
        return view('site.pages.newsletter');
    }

    public function about()
    {
        return view('site.pages.about');
    }

    public function privacy()
    {
        return view('site.pages.privacy-policy');
    }

    public function search(Request $request)
    {
    }

    public function department($slug)
    {
        $department = $this->department->where('slug', $slug)->first();
        $data = $department->products()->paginate(1);
        return view('site.pages.department', compact('data', 'department'));
    }

    public function send(Request $request)
    {
        //contatokatechimports@gmail.com
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email',
            'contato' => 'required'
        ]);

        $details = [
            'nome' => $request->nome,
            'email' => $request->email,
            'contato' => $request->contato
        ];
        Mail::to('contatokatechimports@gmail.com')->send(new SendEmailNewsLetter($details));
        return redirect()->back()->with('success', 'Recebemos sua solicitação!');
    }
}
