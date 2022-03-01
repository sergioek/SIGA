@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Mi Establecimiento</h1>
@stop

@section('content')
    <p>Modificar los datos del establecimiento.</p>
    <x-mensajes/>
    @include('establecimiento.form-establecimiento')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop