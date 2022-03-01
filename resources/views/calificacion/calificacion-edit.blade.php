@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Calificaciones de alumnos regulares<h1>
@stop

@section('content')
    <p>Ver y cargar las calificaciones del alumno.</p>
    <p class="text-danger">Sistema de ponderación automático. Se computa el 40% de la nota del 1er cuatrimestre y un 60% del segundo.</p>
    <a href="{{route('calificaciones.index')}}">
        <button class="btn btn-secondary offset-lg-10" title="Volver atrás"><i class="fas fa-undo-alt"></i> Volver</button>
    </a>
    
    <div class="mb-3">
        <h5 class="text-primary">Alumno/a:</h5> <input type="text" class="form-control" disabled name="" id="" value="{{$alumno->apellidos . " " . $alumno->nombres}} ">
    </div>
    
    
    <x-mensajes/>

    @include('calificacion.form.calificacion-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ URL::asset('js/calificaciones.js') }}"></script>
@stop