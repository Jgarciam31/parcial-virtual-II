@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"> <h1>Crear Categoría</h1></div>
        <hr>

                <form action="{{route('categorias.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Nombre</label>
                        <input class="form-control" type="text" name="nombre" maxlength="45">
                    </div>
                        <button class="btn btn-success" type="submit">Guardar</button>
                </form>
        </div>
    </div>
@endsection
