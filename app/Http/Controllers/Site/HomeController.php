<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailNewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   public function index()
    {
        return view('site.index');
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
