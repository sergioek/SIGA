@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Alumnos del establecimiento</h1>
@stop

@section('content')
    <p>Crear un nuevo alumno/a.</p>
    <x-mensajes/>
    @include('alumno.form.form-nuevo-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ URL::asset('js/discapacidad.js') }}"></script>
@stop