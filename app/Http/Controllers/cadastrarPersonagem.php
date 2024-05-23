<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personagens;

class cadastrarPersonagem extends Controller
{
    public function cadastrarPersonagem() {
        return view('cadastrarPersonagem');
    }

    public function create()
    {
        return view('personagem.create');
    }

    public function savePersonagem(Request $request) {

        $path = null;
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->savePersonagem('images', 'public');
        }
        personagens::create([
            'nome' => $request->nome,
            'poder' => $request->poder,
            'sonho' => $request->sonho,
            'imagem' => $path,
        ]);
        return view('cadastrarPersonagem');
    }

    public function index()
    {
        $personagens = personagens::all();
        return view('cadastrarPersonagem', compact('personagens'));
    }
}
