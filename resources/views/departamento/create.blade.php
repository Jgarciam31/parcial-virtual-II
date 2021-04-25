@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;">  <h1>Crear Departamento</h1></div>
        <hr>
            <div class="">
                <form action="{{route('departamentos.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion"
                               value="{{old('descripcion')}}" maxlength="45">
                    </div>
                        <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
