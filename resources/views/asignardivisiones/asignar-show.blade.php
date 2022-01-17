@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Secciónes del establecimiento</h1>
@stop

@section('content')
    <p>Ver los alumnos y la sección a la que corresponden.</p>
    <x-mensajes/>
    @livewire('asignar-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop