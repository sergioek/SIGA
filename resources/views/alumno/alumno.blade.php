@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Alumnos del establecimiento</h1>
@stop

@section('content')
    <p>Ver y modificar los datos de alumnos.</p>
    <x-mensajes/>
    @livewire('alumno-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop