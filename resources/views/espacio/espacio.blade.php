@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Espacios curriculares</h1>
@stop

@section('content')
    <p>Ver y modificar los espacios curriculares.</p>
    <x-mensajes/>
    @livewire('espacio-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop