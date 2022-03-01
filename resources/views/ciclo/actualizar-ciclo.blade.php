@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Ciclos lectivos del establecimiento</h1>
@stop

@section('content')
    <p>Editar ciclo lectivo.</p>
    <x-mensajes/>
    @include('ciclo.form.form-editar-ciclo')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop