@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Cursos y divisiones del establecimiento</h1>
@stop

@section('content')
    <p>Crear cursos y divisiones.</p>
    <x-mensajes/>
    @include('curso.form.form-nuevo-curso')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop