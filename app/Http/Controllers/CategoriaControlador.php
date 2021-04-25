<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\CategoriaPostRequest;
use Illuminate\Http\Request;

class CategoriaControlador extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::all();

        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(CategoriaPostRequest $request)
    {
        $data = $request->validated();
        $categoria = Categoria::create($data);
        return redirect()->route('categorias.index');
    }
    public function update()
    {

    }
    public function edit()
    {

    }
    public function destroy(Request $request, Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
