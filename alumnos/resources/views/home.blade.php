@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-center mb-4">Agregar Alumnos</h3>
        <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el nombre">
                </div>
                <div class="form-group">
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="correo@dominio.cl">
                </div>
                <div class="form-group">
                    <input type="date" name="created_at" id="created_at" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Guardar Alumno</button>
            </form>
            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
            @endif
        </div>
        <div class="col-md-7">

        </div>
    </div>
@endsection