@extends('plantillas.plantilla1')
@section('titulo')
Datos
@endsection
@section('cabecera')
Datos Alumno
@endsection
@section('contenido')
<div class="card text-dark bg-white mb-3 m-auto" style="max-width: 100rem;">
    <div class="card-header text-center p-2">
        <img src="{{asset($alumno->foto)}}" class="img-thumbnail" width="180rem" height="180rem">
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$alumno->apellidos}} , {{$alumno->nombre}}</h5>
      <p class="card-text"><b>Correo electrónico:</b>{{$alumno->email}}</p>
      <p class="card-text"><b>Nº Teléfono:</b>{{$alumno->telefono}}</p>
      <p class="card-text"><b>Registro creado:</b>{{$alumno->created_at}}</p>
      <p class="card-text"><b>Registro actualizado:</b>{{$alumno->updated_at}}</p>
      <a href="{{route('alumnos.index')}}" class="btn btn-primary mt-2"><i class="fa fa-house-user"></i> Inicio</a>
    </div>
</div>
@endsection
