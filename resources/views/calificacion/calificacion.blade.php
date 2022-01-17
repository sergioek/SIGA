@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Calificaciones de alumnos</h1>
@stop

@section('content')
    <p>Ver y cargar las calificaciones de alumnos.</p>
    <x-mensajes/>
    @livewire('calificaciones-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop