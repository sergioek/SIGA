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
    <strong>CONSTAR</strong> que <strong>{{$alumno->apellidos . ", " . $alumno->nombres}}</strong> con DNI Nº <strong>{{$alumno->dni}}</strong> de <strong>{{$curso->division->curso->curso}}</strong> año <strong>"{{$curso->division->division->division}}"</strong>perteneciente al Plan de Estudios de <strong>{{$curso->division->carrera->nombre}}, tiene en trámite su Certificado de Estudios Incompletos (Analítico Parcial). </strong>Se adjunta a la presente el historial acadámico del alumno/a, que da cuenta de los cursos y/o espacios aprobados por el mismo.</p>
    
    <p>A pedido del interesado se extiende la presente <strong>CONSTANCIA en la Ciudad de Fernández el día {{$fecha}}, para ser presentado ante las autoridades que lo requieran</strong>.</p>
    
    </div>
    
    
    <div style="float: left; padding:80px;">
        <strong>Sello</strong><strong>_____________</strong>  
    </div>
    
    <div style="float: right; padding:80px;">
        <strong>Firma</strong><strong>_____________</strong>      
    </div>
    
    
    <div style="padding-top: 220px;padding-left:40px; ">
        <footer>
            
            <p><strong>Para comunicarnos:</strong>{{$establecimiento->correo}} - <strong>Teléfono:</strong>
                {{$establecimiento->telefono}}
            </p>
        </footer>
    </div>
    