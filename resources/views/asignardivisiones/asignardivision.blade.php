@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Asignar a los inscriptos una sección</h1>
@stop

@section('content')
    <p>Asigne división a los alumnos inscriptos. Si no están presentes en el listado, es porque se asignó una división con anterioridad o porque no existe un ciclo lectivo activo. 
    
    Para modificar la sección de un alumno puede ir al ítem "Ver alumnos de una sección".</p>
    <x-mensajes/>
    @livewire('asignar-division')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop