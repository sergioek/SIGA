@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Calificaciones por exámen<h1>
@stop

@section('content')
    <p>Ver y cargar las calificaciones del alumno.</p>
    <a href="{{route('calificaciones.index')}}">
        <button class="btn btn-secondary offset-lg-10" title="Volver atrás"><i class="fas fa-undo-alt"></i> Volver</button>
    </a>
    <div class="mb-3">
        <h5 class="text-primary">Alumno/a:</h5> <input type="text" class="form-control" disabled name="" id="" value="{{$alumno->apellidos . " " . $alumno->nombres}} ">
    </div>
    
    <x-mensajes/>
    @include('calificacion.form.calificacion-alumno-examen')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop