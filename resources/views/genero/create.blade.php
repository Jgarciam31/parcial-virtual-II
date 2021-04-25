@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"><h1>Crear Genero</h1></div>
        <hr>
            <div class="">
                <form action="{{route('generos.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Sexo</label>
                        <input class="form-control" type="text" name="sexo"
                               value="{{old('sexo')}}" maxlength="45">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
