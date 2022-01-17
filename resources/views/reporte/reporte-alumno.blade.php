@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Reportes en PDF por alumno</h1>
@stop

@section('content')
    <p>Generar reportes en PDF de un alumno.</p>
    <x-mensajes/>
   @include('reporte.form-alumno.form-datos-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop