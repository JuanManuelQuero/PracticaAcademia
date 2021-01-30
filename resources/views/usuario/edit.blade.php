@extends('plantillas.plantilla1')
@section('titulo')
Editar
@endsection
@section('cabecera')
Editar datos alumno
@endsection
@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger my-3 p-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('alumnos.update', $alumno)}}" name="form" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="row">
        <div class="col-2">
            <input type="text" name="nombre" value="{{$alumno->nombre}}" class="form-control" required>
        </div>
        <div class="col-3">
            <input type="text" name="apellidos" value="{{$alumno->apellidos}}" class="form-control" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-3">
            <input type="email" name="email" value="{{$alumno->email}}" class="form-control" required>
        </div>
        <div class="col-3">
            <input type="text" name="telefono" value="{{$alumno->telefono}}" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <img src="{{asset($alumno->foto)}}" class="img-thumbnail" width="180rem" height="180rem">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-5">
            <input type="file" name="foto" class="form-control-file" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Confirmar</button>
            <a href="{{route('alumnos.index')}}" class="btn btn-primary"><i class="fa fa-house-user"></i> Inicio</a>
        </div>
    </div>
</form>
@endsection
