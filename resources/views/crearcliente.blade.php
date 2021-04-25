@extends('layout')
@section('content')
    <div class="shadow-md m-5 p-5 bg-light">
        <div style="text-align: center;"><h1>Clientes</h1></div>
        <hr>
        <form action="{{route('clientes.store')}}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
            </div>
            <div class="form-group">
                <label for="nit">Nit</label>
                <input class="form-control" type="text"  name="nit" value="{{old('nit')}}">
            </div>
            <div class="form-group">
                <label for="nombre">Fecha de Nacimiento</label>
                <input class="form-control" type="date" name="fecha_de_nacimiento" value="{{old('fecha_de_nacimiento')}}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input class="form-control" type="email"  name="correo" value="{{old('correo')}}">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input class="form-control" type="text"  name="telefono" value="{{old('telefono')}}">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <div class="input-group mb-3">
                    <select class="form-control"  name="id_categoria">
                        @foreach((\App\Categoria::all() ?? [] ) as $categoria)
                            <option  value="{{$categoria->id_categoria}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="genero">Genero</label>
                <div class="input-group mb-3">
                    <select class="form-control"  name="id_genero">
                        @foreach((\App\Genero::all() ?? [] ) as $genero)
                            <option  value="{{$genero->id_genero}}">{{$genero->sexo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion">Departamento</label>
                <div class="input-group mb-3">
                    <select class="form-control"  name="id_departamento">
                        @foreach((\App\Departamento::all() ?? [] ) as $departamento)
                            <option value="{{$departamento->id_departamento}}">{{$departamento->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <button class="btn btn-success" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{route('clientes.index')}}" type="submit">Regresar</a>


        </form>

    </div>
@endsection
