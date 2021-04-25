@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"><h1 > Departamentos </h1></div>
        <hr>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>Descripcion</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($departamentos as $departamento)
                <tr>
                    <td>{{$departamento->descripcion}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-departamento-{{$departamento->id_departamento}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-departamento-{{$departamento->id_departamento}}"
                              action="{{route('departamentos.destroy',['departamento'=>$departamento->id_departamento])}}" method="POST"
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
