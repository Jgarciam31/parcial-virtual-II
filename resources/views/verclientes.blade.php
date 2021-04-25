@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"><h1> Clientes </h1></div>
        <hr>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>Nombre</td>
                <td>Nit</td>
                <td>Fecha de Nacimiento</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Categoria</td>
                <td>Genero</td>
                <td>Departamento</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->nit}}</td>
                    <td>{{$cliente->fecha_de_nacimiento}}</td>
                    <td>{{$cliente->correo}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->nombrecategoria}}</td>
                    <td>{{$cliente->genero}}</td>
                    <td>{{$cliente->nombredepartamento}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-cliente-{{$cliente->id_cliente}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-cliente-{{$cliente->id_cliente}}"
                              action="{{route('clientes.destroy',['cliente'=>$cliente->id_cliente])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
