@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Documentación de SIGA</h1>
@stop

@section('content')
    <p>Manual de usuario.</p>
    <x-mensajes/>
    <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
    <iframe src="{{url('storage/documentacion/MANUAL.pdf')}}" frameborder="0" class="embed-responsive-item"></iframe>
</div>

@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop