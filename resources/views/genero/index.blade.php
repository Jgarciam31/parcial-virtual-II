@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"> <h1 > Genero </h1></div>
        <hr>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>Sexo</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($generos as $genero)
                <tr>
                    <td>{{$genero->sexo}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-genero-{{$genero->id_genero}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-genero-{{$genero->id_genero}}"
                              action="{{route('generos.destroy',['genero'=>$genero->id_genero])}}" method="POST"
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
