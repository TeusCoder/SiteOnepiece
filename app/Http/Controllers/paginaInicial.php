<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaInicial extends Controller
{
    public function paginaInicial(){
        return view('paginaInicial');
    }
}
