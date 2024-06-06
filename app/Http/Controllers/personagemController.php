<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personagens;


class personagemController extends Controller
{
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
        return redirect()->route('site.personagens');
    }

    public function index()
    {
        $personagens = personagens::all();
        return view('cadastrarPersonagem', compact('personagens'));
    }

    public function Mostrar($id)
    {
        $personagem = personagens::findOrFail($id);
        return view('mostrar', compact('personagem'));
    }

    public function edit($id)
    {
        $personagem = personagens::findOrFail($id);
        return view('personagemEdit', compact('personagem'));
    }

    public function update(Request $request, $id)
    {

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
