<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personagens extends Controller
{
    public function personagens() {
        return view('personagens');
    }
}
