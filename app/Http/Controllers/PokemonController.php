<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function principal($nome)
    {
        return view('pokemon', compact('nome'));
    }

}
