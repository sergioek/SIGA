@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Tutores</h1>
@stop

@section('content')
    <p>Ver y modificar los tutores de alumnos.</p>
    <x-mensajes/>
    @livewire('tutor-show')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop