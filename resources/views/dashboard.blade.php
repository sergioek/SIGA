@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Bienvenido a "SIGA"</h1>
@stop

@section('content')
    <p>Sistema Integral de Gestión de Alumnos</p>
    @livewire('dashboard')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop