<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personagens;


class personagemController extends Controller
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
            $path = $request->file('imagem')->store('images', 'public');
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

    public function edit($id)
    {
        $personagem = personagens::findOrFail($id);
        return view('personagemEdit', compact('personagem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'poder' => 'required|string|max:255',
            'sonho' => 'required|string',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $personagem = personagens::findOrFail($id);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('images', 'public');
            $personagem->imagem = $path;
        }

        $personagem->nome = $request->nome;
        $personagem->poder = $request->poder;
        $personagem->sonho = $request->sonho;
        $personagem->save();

        return redirect()->route('site.personagens');
    }

    public function destroy($id)
    {
        $personagem = personagens::findOrFail($id);
        $personagem->delete();
        return redirect()->route('site.personagens');
    }

}
