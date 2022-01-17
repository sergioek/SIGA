@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Carreras de mi establecimiento</h1>
@stop

@section('content')
    <p>Ver y modificar las carreras.</p>
    <x-mensajes/>
    @livewire('carrera-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop