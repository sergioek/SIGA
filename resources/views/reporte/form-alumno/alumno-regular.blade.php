<style>
    
    @page {
          margin-left: 1cm;
          margin-right: 1cm; 
        }
</style>

<x-membrete-a4 ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>

<h2 style="text-align: center">CONSTANCIA DE ALUMNO REGULAR</h2>

<div style="text-align: justify; line-height: 3.5; padding:40px;">

<p><strong>         Rectoría de la Escuela Técnica Nº12</strong>, hace 
<strong>CONSTAR</strong> que <strong>{{$alumno->apellidos . ", " . $alumno->nombres}}</strong> con DNI Nº <strong>{{$alumno->dni}}</strong> es <strong>ALUMNO REGULAR</strong>  de <strong>{{$curso->division->curso->curso}}</strong> año <strong>"{{$curso->division->division->division}}"</strong>  en este <strong>ESTABLECIMIENTO</strong> en el <strong>{{$curso->division->carrera->nombre}}</strong> de la educación técnico profesional.</p>

<p>A pedido del interesado se extiende la presente <strong>CONSTANCIA en la Ciudad de Fernández el día {{$fecha}}, para ser presentado ante las autoridades que lo requieran</strong>.</p>

</div>

<x-firmas/>

<div style="padding-top: 80px;padding-left:40px; ">
    <footer>
        <p><strong>Para comunicarnos:</strong>{{$establecimiento->correo}} - <strong>Teléfono:</strong>
        {{$establecimiento->telefono}}
        </p>
    </footer>
</div>
