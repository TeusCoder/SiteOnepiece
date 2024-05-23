<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class contato extends Controller
{
    public function contato(){
        return view('contato');
    }

    public function saveContato(){
        SiteContato::create([
            'nome'=> $_POST['nome'],
            'email'=> $_POST['email'],
            'assunto'=> $_POST['assunto'],
            'mensagem'=> $_POST['mensagem']
        ]);
        return view('contato');
    }
}
