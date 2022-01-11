<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailNewsLetter;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   public function index()
    {
        $sliders = Slider::orderby('created_at', 'desc')->get();
        return view('site.index', compact('sliders'));
    }

    public function newsletter()
    {
        return view('site.newsletter');
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
