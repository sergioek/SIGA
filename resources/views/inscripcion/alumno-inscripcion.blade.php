@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Inscripciones de {{$alumno->nombres ." ".$alumno->apellidos}} </h1>
@stop

@section('content')
    <p>Ver las inscripciones del alumno.</p>
    <x-mensajes/>
    @include('inscripcion.form.tabla-inscripciones-alumno')
 
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop