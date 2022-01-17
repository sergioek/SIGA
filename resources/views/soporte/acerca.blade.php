@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Acerca de SIGA</h1>
@stop

@section('content')
    <p>Información del sistema.</p>
    <x-mensajes/>
     @include('soporte.modal-acerca')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop