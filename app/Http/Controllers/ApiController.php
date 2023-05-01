<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index()
    {
      echo("wew");
    }

    public function pokemonSprite(Request $request, $pokemonId)
    {
      return view('pokemonSprite', ['pokemonId' => $pokemonId]);
    }
}
