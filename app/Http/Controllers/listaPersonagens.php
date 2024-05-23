<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaPersonagens extends Controller
{
    public function personagens() {
        $personagens='';
        return view('personagens')->with('personagens', $personagens);
    }

}
