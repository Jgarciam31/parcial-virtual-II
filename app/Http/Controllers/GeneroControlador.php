<?php

namespace App\Http\Controllers;

use App\Genero;
use App\Http\Requests\GeneroPostRequest;
use Illuminate\Http\Request;

class GeneroControlador extends Controller
{
    public function index(Request $request)
    {
        $generos = Genero::orderBy('id_genero', 'ASC')->get();
        return view('genero.index', compact('generos'));
    }

    public function create()
    {
        return view('genero.create');
    }

    public function store(GeneroPostRequest $request)
    {
        $data = $request->validated();
        $genero = Genero::create($data);
        return redirect()->route('generos.index');
    }
    public function update()
    {

    }
    public function edit()
    {

    }
    public function destroy(Request $request, Genero $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index');
    }
}
