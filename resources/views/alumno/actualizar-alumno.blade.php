@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Alumnos del establecimiento</h1>
@stop

@section('content')
    <p>Editar los datos de alumnos.</p>
    <x-mensajes/>
    @include('alumno.form.form-editar-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop