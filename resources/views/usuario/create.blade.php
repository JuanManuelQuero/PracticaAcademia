@extends('plantillas.plantilla1')
@section('titulo')
Crear
@endsection
@section('cabecera')
Añadir Alumno
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
<form action="{{route('alumnos.store')}}" name="form" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-2">
        <input type="text" name="nombre" placeholder="Introduzca nombre" class="form-control" required>
    </div>
    <div class="col-3">
        <input type="text" name="apellidos" placeholder="Introduzca apellidos" class="form-control" required>
    </div>
</div>
<div class="row mt-3">
    <div class="col-3">
        <input type="email" name="email" placeholder="Introduzca email" class="form-control" required>
    </div>
    <div class="col-3">
        <input type="text" name="telefono" placeholder="Introduzca telefono(opcional)" class="form-control">
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <input type="file" name="foto" class="form-control-file">
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Añadir Alumno</button>
        <button type="reset" class="btn btn-warning"><i class="fa fa-brush"></i> Limpiar</button>
        <a href="{{route('alumnos.index')}}" class="btn btn-primary"><i class="fa fa-house-user"></i> Inicio</a>
    </div>
</div>
</form>
@endsection
