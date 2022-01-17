@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Inscripción de nuevo alumno</h1>
@stop

@section('content')
    <p>Inscribir un nuevo alumno, ingresante al establecimiento.</p>
    <x-mensajes/>
    @include('inscripcion.form.form-nueva-inscripcion')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop