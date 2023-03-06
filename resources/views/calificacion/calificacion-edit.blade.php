@extends('adminlte::page')

@section('title', 'SIGA')

@section('content_header')
    <h1>Calificaciones de alumnos regulares<h1>
@stop

@section('content')
    <p>Ver y cargar las calificaciones del alumno.</p>
    <p class="text-danger">Sistema de ponderación automático. Se computa el 40% de la nota del 1er cuatrimestre y un 60% del segundo.</p>
    <a href="{{route('calificaciones.index')}}">
        <button class="btn btn-secondary offset-lg-10" title="Volver atrás"><i class="fas fa-undo-alt"></i> Volver</button>
    </a>
    
    <div class="mb-3">
        <h5 class="text-primary">Alumno/a:</h5> <input type="text" class="form-control" disabled name="" id="" value="{{$alumno->apellidos . " " . $alumno->nombres}} ">
    </div>
    
    <div class="mb-3">
        <p class="text-bold">Filtros:</p>
        <a href="{{url('calificaciones/'.$alumno->id.'/edit?page=1')}}">
		<button class="btn btn-secondary">1º</button>
        </a>

	 <a href="{{url('calificaciones/'.$alumno->id.'/edit?page=13')}}">
		<button class="btn btn-secondary">2º</button>
        </a>

	 <a href="{{url('calificaciones/'.$alumno->id.'/edit?page=26')}}">
		<button class="btn btn-secondary">3º</button>
        </a>

	 <a href="{{url('calificaciones/'.$alumno->id.'/edit?page=38')}}">
		<button class="btn btn-secondary">4º</button>
        </a>

	 <a href="{{url('calificaciones/'.$alumno->id.'/edit?page=50')}}">
		<button class="btn btn-secondary">5º</button>
        </a>

 	<a href="{{url('calificaciones/'.$alumno->id.'/edit?page=62')}}">
		<button class="btn btn-secondary">6º</button>
        </a>
    </div>

    <x-mensajes/>
  
    @include('calificacion.form.calificacion-alumno')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ URL::asset('js/calificaciones.js') }}"></script>
@stop