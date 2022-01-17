@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Inscripción por alumno</h1>
@stop

@section('content')
    <p>Ver todos los alumnos inscriptos en el establecimiento. Haga click sobre el nombre para ver las inscripciones de un alumno.</p>
    <x-mensajes/>
    @livewire('inscripcion-alumno-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop