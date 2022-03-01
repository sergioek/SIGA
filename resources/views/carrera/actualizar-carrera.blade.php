@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Carreras de mi establecimiento</h1>
@stop

@section('content')
    <p>Editar Carrera.</p>
    @include('carrera.forms.form-editar-carrera')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop