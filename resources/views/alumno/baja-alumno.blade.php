@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Baja de alumno/a {{$alumno->apellidos . " " . $alumno->nombres}}</h1>
@stop

@section('content')
    <p>Dar de Baja a un alumno/a .</p>
    <x-mensajes/>
    @include('alumno.form.form-baja-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop