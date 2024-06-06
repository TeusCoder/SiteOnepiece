<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class contato extends Controller
{
    public function contato(){
        return view('contato');
    }

    public function saveContato(Request $request){
        SiteContato::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'mensagem' => $request->input('mensagem'),
        ]);
        return view('contato');
    }
}
