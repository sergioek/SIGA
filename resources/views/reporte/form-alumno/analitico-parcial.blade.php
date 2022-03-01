
<x-membrete-a4 ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>

<h2 style="text-align: center">CONSTANCIA DE ANALÍTICO PARCIAL</h2>


<style>

    @page {
          margin-left: 1cm;
          margin-right: 1cm; 
        }
        
    .table{
        margin-top: 20px;
    width: 100%;
    border-collapse: collapse;

    }

    .td{
        height: 40px;
        border: 1px solid black;
        padding-left: 10px;
    }

    .th{
        border: 1px solid black;
    }


    td {
  border: 1px solid black;
  height: 3px;
  vertical-align: bottom;
  
}

th{
    border:3px solid black; 
    height: 30px;
    background-color: gainsboro;
  
}

table {
  width: 100%;

}

th, td {
  padding: 1px;
  vertical-align:2px;
}



</style>

<table class="table">

    <thead>
        <tr>
            <th colspan="3" class="th">DATOS DEL ALUMNO/A</th>
        </tr>

    </thead>

    <tbody>
    <tr class="">
        <td class="td"> 
            <strong>Alumno:</strong> {{$alumno->apellidos . " " . $alumno->nombres}}
        </td>

        <td class="td">
            <strong>DNI Nº</strong>: {{$alumno->dni}}
        </td>

        <td class="td">
            <strong>Nacimiento:</strong>
            {{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}
        </td>
    </tr>
    
    <tr>
        <td class="td" colspan="3">
            <strong>Carrera:</strong> {{$curso->division->carrera->nombre}} 
        </td>
    </tr>
   
    </tbody>
</table>


  
<div class="">
    <table class="">
        <thead class="">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Curso</th>
            <th scope="col">Espacio Curricular</th>
            <th scope="col" >Calificacion</th>
            <th scope="col">Condición</th>
            <th scope="col">Fecha</th>
            <th scope="col">Establecimiento</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($calificaciones as $calificacion) 

            <tr>
                <td style="text-align:center;">
                    @if ($loop->iteration)
                        {{$loop->iteration}}
                    @endif
                </td>
                
                <td style="text-align:center;">
                    {{$calificacion->curso->curso}}
                </td>

                <td>
                    {{$calificacion->espacio->nombre}}
                </td>

                

                <td style="text-align:center;">
                    
                    @if (empty($calificacion->cal_def))
                        {{'Ausente'}}
                    @else
                       {{$calificacion->cal_def}} 
                    @endif
                    
                </td>

                <td style="text-align:center;">
                    @if ($calificacion->examen=='R')
                        {{'Regular'}}
                    @endif

                    @if ($calificacion->examen=='P')
                    {{'Previo'}}
                    @endif

                    @if ($calificacion->examen=='L')
                    {{'Libre'}}
                    @endif

                    @if ($calificacion->examen=='E')
                    {{'Equivalente'}}
                    @endif

                    @if ($calificacion->examen=='F')
                    {{'Finalización de Carrera'}}
                    @endif
                </td>

                <td style="text-align:center;font-size:12px;">
                    {{$calificacion->fecha}}
                </td>

                <td style="font-size:12px; text-align:left;">
                    @if (empty($calificacion->establecimiento))
                        {{'ESTE ESTABLEC.'}}
                    @else
                        {{$calificacion->establecimiento}}
                    @endif
                    
                </td>

                <td style="font-size:12px; text-align:left;">
                    {{$calificacion->observaciones}} 
                </td>
                 
            </tr>   
            
             @empty
                    <p>No se encontraron resultados en su busqueda</p>
            @endforelse 

            <tr>
                <td colspan="8" style="height: 20px; text-align:center;padding-top:10px;">
                    <strong>PROMEDIO GENERAL: </strong>
                    {{round($promedio/$materias,2)}}
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div>
    <table style="width: 60%; margin:0 auto;">
        <tr>
            <td style="border: 0px solid white;">
                <img src="{{url('storage/img/sello.png')}}" alt="" width="100px" >
            </td>

            <td style="border: 0px solid white;">
                <img src="{{url('storage/img/firma.png')}}" alt="" width="160px" >
            </td>
        </tr>
    </table>

</div>

<script type="text/php">
    if (isset($pdf)) {
        $text = "page {PAGE_NUM} / {PAGE_COUNT}";
        $size = 10;
        $font = $fontMetrics->getFont("Verdana");
        $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
        $x = ($pdf->get_width() - $width) / 2;
        $y = $pdf->get_height() - 35;
        $pdf->page_text($x, $y, $text, $font, $size);
    }
</script>