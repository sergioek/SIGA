@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Asignar sección a {{$asignacion->inscripcion->alumno->apellidos . " ". $asignacion->inscripcion->alumno->nombres}}</h1>
@stop

@section('content')
    <p>Editar la sección del alumno/a.</p>
    <x-mensajes/>
    @include('asignardivisiones.form.form-edit-seccion')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop