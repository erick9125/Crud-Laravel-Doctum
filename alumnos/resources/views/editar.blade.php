@extends('base')

@section('content')
<h3 class="text-center mb-3 pt-3">Editar Alumno {{$alumnoActualizar->id}}</h3>
<form action="{{route('update', $alumnoActualizar->id)}}" method="POST" >
    @method('PUT')
    @csrf
    <div class="form-group">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$alumnoActualizar->nombre}}" >
    </div>
    <div class="form-group">
        <input type="email" name="correo" id="correo" class="form-control" value="{{$alumnoActualizar->correo}}">
    </div>
    <div class="form-group">
        <input type="date" name="created_at" id="created_at" class="form-control" value="{{$alumnoActualizar->created_at}}">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Editar Alumno</button>
</form>
@if (session('update'))
                <div class="alert alert-success mt-3">
                    {{session('update')}}
                </div>
            @endif
@endsection