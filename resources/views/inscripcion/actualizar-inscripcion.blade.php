@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')

@stop

@section('content')
    <x-mensajes/>
    @livewire('inscripcion-edit',['inscripcionID'=>$inscripcionID])
 
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop