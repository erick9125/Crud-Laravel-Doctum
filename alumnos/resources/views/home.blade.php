@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-center mb-4">Agregar Alumnos</h3>
        <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" minlength="3" placeholder="Ingresa el nombre">
                </div>

                @error('nombre')
                    <div class="alert alert-danger">
                        El nombre es requerido
                    </div>
                @enderror

                <div class="form-group">
                    <input type="email" name="correo" id="correo" class="form-control" value="{{old('correo')}}" placeholder="correo@dominio.cl">
                </div>

                @error('correo')
                    <div class="alert alert-danger">
                        El correo es requerido
                    </div>
                @enderror

                <div class="form-group">
                    <input type="date" name="created_at" id="created_at" value="{{old('created_at')}}" class="form-control">
                </div>

                @error('created_at')
                    <div class="alert alert-danger">
                        La fecha es requerido
                    </div>
                @enderror

                <button type="submit" class="btn btn-success btn-block">Guardar Alumno</button>
            </form>
            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
            @endif
        </div>
        <div class="col-md-7">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($alumno as $item)
                        <tr>
                            <th>{{$item->nombre}}</th>
                            <th>{{$item->correo}}</th>
                            <th>{{$item->created_at}}</th>
                            <th>
                            <a href="{{route('editar', $item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('eliminar', $item->id)}}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            </th>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (session('eliminar'))
                <div class="alert alert-success mt-3">
                    {{session('eliminar')}}
                </div>
            @endif
           
        </div>
    </div>
@endsection