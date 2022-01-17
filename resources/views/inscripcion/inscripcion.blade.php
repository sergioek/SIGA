@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Inscripción</h1>
@stop

@section('content')
    <p>Ver todos los alumnos inscriptos en el establecimiento.</p>
    <x-mensajes/>
    @livewire('inscripcion-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop