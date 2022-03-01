@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Tutores</h1>
@stop

@section('content')
    <p>Crear nuevo tutor de alumnos.</p>
    <x-mensajes/>
    @include('tutor.form.form-nuevo-tutor')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop