@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Reporte en PDF del Libro de Calificaciones</h1>
@stop

@section('content')
    <p>Generar reportes en PDF de los folios del libro de calificaciones.</p>
    <x-mensajes/>
   @include('reporte.form-libro.form-libro')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop