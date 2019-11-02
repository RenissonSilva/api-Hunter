<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Personagem;

class PersonagemController extends Controller
{

    public function index()
    {
        return Personagem::all();
    }


    public function store(Request $request)
    {
        Personagem::create($request->all());
    }

    public function show($id)
    {
        return Personagem::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $personagem = Personagem::findOrFail($id);
        $personagem->update($request->all());
    }

    public function destroy($id)
    {
        $personagem = Personagem::findOrFail($id);
        $personagem->delete();
    }
}
