<style>
 @page {
    margin-left: 1cm;
    margin-right: 1cm; 
  }   
</style>

<x-membrete-a4 ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>

    <h2 style="text-align: center">CONSTANCIA DE PASE</h2>
    
    <div style="text-align: justify; line-height: 3.5; padding:20px;">
    
    <p><strong>         Rectoría de la Escuela Técnica Nº12</strong>, hace 
    <strong>CONSTAR</strong> que <strong>{{$alumno->apellidos . ", " . $alumno->nombres}}</strong> con DNI Nº <strong>{{$alumno->dni}}</strong> de <strong>{{$curso->division->curso->curso}}</strong> año <strong>"{{$curso->division->division->division}}"</strong>perteneciente al Plan de Estudios de <strong>{{$curso->division->carrera->nombre}}, tiene en trámite su Certificado de Estudios Incompletos (Analítico Parcial). </strong></p>
    
    <p><strong style="text-decoration: underline;">* ESPACIOS QUE ADEUDA:</strong> {{$materias}}</p>

    <p><strong style="text-decoration: underline;">* IDIOMA CURSADO:</strong> {{$idioma}}</p>

    <p>A pedido del interesado se extiende la presente <strong>CONSTANCIA en la Ciudad de Fernández el día {{$fecha}}, para ser presentado ante las autoridades que lo requieran</strong>.</p>
    
    </div>
    
    {{-- <x-firmas/> --}}

    <div style="padding-top: 5px;padding-left:40px; ">
   
    </div>
    