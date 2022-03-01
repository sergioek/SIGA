@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>tutores</h1>
@stop

@section('content')
    <p>Editar los tutores de alumnos.</p>
    <x-mensajes/>
    @include('tutor.form.form-editar-tutor')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop