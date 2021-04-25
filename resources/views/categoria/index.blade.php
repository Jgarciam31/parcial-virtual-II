@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"> <h1> Categoría </h1></div>
        <hr>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>Nombre</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categorias as $categoria)
                <tr>
                    <td>{{$categoria->nombre}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" onclick="event.preventDefault();
                            document.getElementById('delete-categoria-{{$categoria->id_categoria}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-categoria-{{$categoria->id_categoria}}"
                              action="{{route('categorias.destroy',['categoria'=>$categoria->id_categoria])}}" method="POST"
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
