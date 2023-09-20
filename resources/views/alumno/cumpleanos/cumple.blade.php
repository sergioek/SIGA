@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Cumpleaños del día</h1>
@stop

@section('content')
    <p>Ver alumnos/as que cumplen años el día de hoy.</p>
    <x-mensajes/>
    @livewire('alumnocumple')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop