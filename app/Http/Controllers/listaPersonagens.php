<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personagens;

class listaPersonagens extends Controller
{
    public function personagens() {
        $personagens= personagens::all();
        return view('personagens')->with('personagens', $personagens);
    }

}
