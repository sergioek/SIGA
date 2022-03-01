<style>
.titulo{
    text-align: center;
    color: dodgerblue;
}

table{
    width: 100%;
    border-collapse: collapse;
}

.alumnos{
    border: 1px solid black;
    
}


.td {
  border: 1px solid black;
  height: 35px;
  vertical-align: center;
  padding: 10px;
 
}

.th{
    border:3px solid black; 
    height: 30px;
    text-align: center;
  
}


.th2{
    border:3px solid black; 
    height: 10px;
    text-align: center;
}


.firma{
    border:3px solid black; 
    height: 40px;
    text-align: center;
}





</style>

<x-membrete ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>

<div>
    <h1 class="titulo">PLANILLA DE EVALUACIÓN</h1>
</div>
    


<table>
    <tr>
        <td>
            <p><strong>Curso: </strong>{{$curso->curso->curso . " " . $curso->division->division}}</p>
            
        </td>

        <td>
            <p><strong>Ciclo: </strong>{{$curso->carrera->nombre}}</p>

        </td>

        <td >
            <p><strong>Preceptor/a: </strong>{{$curso->preceptor}}</p>
        </td>

        <td>
            <p><strong>Turno: </strong>___________________</p>
            
        </td>
    </tr>
</table>

<table>
    <tr>
        <td>
            <p><strong>Espacio curricular: </strong>________________________________________________________________</p>
            
        </td>
        <td>
            <p><strong>Profesor/a: </strong>_________________________________________________________</p>
        </td>
    </tr>

</table>



<div>
    <table class="alumnos">
        <thead >
          <tr>
            <th scope="col" class="th" colspan="1">Nº</th>
            <th scope="col" class="th" colspan="1" style="width: 250px;">Apellido y Nombre</th>
            <th scope="col" class="th" colspan="1">DNI Nº</th>
            <th scope="col" colspan="2" class="th">Evaluación 1º Cuatrimestre</th>
            <th scope="col" colspan="2" class="th">Evaluación 2º Cuatrimestre</th>
            <th scope="col" colspan="2" class="th">Evaluación Final</th>
            <th scope="col" colspan="2" class="th">Taller Int. Diciembre</th>
            <th scope="col" colspan="2" class="th">Taller Int. Febrero</th>
            <th scope="col" colspan="2" class="th">Calificación definitiva</th>
            <th scope="col" class="th">Observaciones</th>
          </tr>

          <tr>
            <th scope="col" class="th2"></th>
            <th scope="col" class="th2"></th>
            <th scope="col" class="th2"></th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2">Nº</th>
            <th scope="col" class="th2">Letra</th>
            <th scope="col" class="th2"></th>
          </tr>

        </thead>

        <tbody>
            @forelse ($alumnos as $alumno) 
            <tr>
            
                <td class="td" style="text-align: center;">
                    @if ($loop->iteration)
                        {{$loop->iteration}}
                    @endif
                </td>

                <td class="td" >
                    <strong>{{$alumno->apellidos . ", "}}</strong>
                    {{$alumno->nombres}}
                </td>

                <td class="td" style="text-align: center;">
                    {{$alumno->dni}}
                </td>
                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>

                <td class="td">
                    
                </td>
            </tr>
           
            
             @empty
                    <p>No se encontraron resultados en su busqueda</p>
            @endforelse
                <tr>
                    <td colspan="3" class="firma">
                        <h3> Firma del Profesor</h3>
                    </td>
                    <td colspan="2" class="firma">

                    </td>
                    <td colspan="2" class="firma">

                    </td>

                    <td colspan="2" class="firma">

                    </td>

                    <td colspan="2" class="firma">

                    </td>

                    <td colspan="2" class="firma">

                    </td>

                    <td colspan="2" class="firma">

                    </td>

                    <td colspan="1" class="firma">

                    </td>

                </tr> 
        </tbody>
    </table>
</div>




<div>
    <h3 style="text-decoration: underline;">Completar la planilla sin raspaduras ni enmiendas: 1 a 3: Rojo; 4 y 5: Verde; 6 a 10: Azul;  Calificación Definitiva: Todo con rojo.  Caso contrario, se solicitará “nueva confección”.</h3>
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
</div>
