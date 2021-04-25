<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests\DepartamentoPostRequest;
use Illuminate\Http\Request;

class DepartamentoControlador extends Controller
{
    public function index(Request $request)
    {
        $departamentos = Departamento::orderBy('id_departamento', 'ASC')->get();
        return view('departamento.index', compact('departamentos'));
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(DepartamentoPostRequest $request)
    {
        $data = $request->validated();
        $departamento = Departamento::create($data);
        return redirect()->route('departamentos.index');
    }
    public function update()
    {

    }
    public function edit()
    {

    }
    public function destroy(Request $request, Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
