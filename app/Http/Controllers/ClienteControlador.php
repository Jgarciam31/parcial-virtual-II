<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClientePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteControlador extends Controller
{
    public function index(Request $request)
    {
        $clientes = DB::table('cliente')
            ->join('categoria', 'cliente.id_categoria','=', 'categoria.id_categoria')
            ->join('genero', 'cliente.id_genero','=', 'genero.id_genero')
            ->join('departamento', 'cliente.id_departamento','=', 'departamento.id_departamento')
        ->select('cliente.*', 'categoria.nombre as nombrecategoria' ,'genero.sexo as genero' , 'departamento.descripcion as nombredepartamento')->get();
        return view('verclientes', compact('clientes'));

    }

    public function create()
    {
        return view('crearcliente');
    }

    public function store(ClientePostRequest $request)
    {
        $data = $request->validated();
        $cliente = Cliente::create($data);
        return redirect()->route('clientes.index');
    }
    public function update()
    {

    }
    public function edit()
    {

    }
    public function destroy(Request $request, Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
