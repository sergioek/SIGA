<style>
td {
  border: 1px solid black;
  height: 3px;
  vertical-align: bottom;
}

th{
    border:3px solid black; 
    height: 70px;
    background-color: white;
  color: black;
  
}

table {
  width: 100%;
  border-collapse: collapse;

}

th, td {
  padding: 1px;
  text-align: center;
}



.escuela, .consejo, .direccion, .titulo {
    text-align: center
}


.titulo{
    color: dodgerblue;
    margin-top: 50px;
}

.td{
    border: 1px solid white;
    text-align: left;
}

.preceptor{
    text-align: right;
}

</style>

<x-membrete ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>


<div>
    <h1 class="titulo">LISTADO DE ALUMNOS</h1>
</div>




<table >
    <tr>
        <td class="td">
            <h3 class="curso">Curso: {{$curso->curso->curso . " " . $curso->division->division}}</h3>
        </td>

        <td class="td">
            <h3 class="ciclo" >Año Lectivo: {{$ciclo->ciclo}}</h3>
        </td>

        <td class="td">
            <h3 class="preceptor" >Preceptor/a: {{$curso->preceptor}}</h3>
        </td>
    </tr>
</table>

  
<div class="">
    <table class="">
        <thead class="">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Legajo</th>
            <th scope="col">Apellidos y Nombres</th>
            <th scope="col">Sexo</th>
            <th scope="col">DNI</th>
            <th scope="col">Fecha Nac.</th>
            <th scope="col">L. Nacimiento</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">AUH</th>
            <th scope="col">Obra Social</th>
            <th scope="col">Tutor</th>
            <th scope="col">CUIL</th>
            <th scope="col">Parentezco</th>
            <th scope="col">Telefono</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Baja</th> 
            <th scope="col">Repitente</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($alumnos as $alumno) 

            <tr>
                <td>
                    @if ($loop->iteration)
                        {{$loop->iteration}}
                    @endif
                </td>
                
                <td>
                    {{$alumno->legajo}}
                </td>

                <td>
                    {{$alumno->apellidos . " " . $alumno->nombres}}
                </td>

            
                <td>
                    {{$alumno->sexo}}
                </td>

                <td>
                    {{$alumno->dni}}

                </td>

                <td>
                    {{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}

                </td>

                <td>
                    {{$alumno->lnacimiento}}
                </td>

              
                <td>
                    {{$alumno->direccion}}
                </td>

                <td>
                    @if ($alumno->domicilio_id==1)
                        Fernandez
                    @endif

                    @if ($alumno->domicilio_id==2)
                        Forres
                    @endif

                    @if ($alumno->domicilio_id==3)
                        Beltran
                    @endif
                </td>

                <td>
                    {{$alumno->auh}}
                </td>

                <td>
                    {{$alumno->obrasocial}}
                </td>

                <td>
                    {{$alumno->apellido . " " . $alumno->nombre}}
                </td>

                <td>
                    {{$alumno->tutorcuil}}
                </td>

                <td>
                    {{$alumno->parentezco}}
                </td>

                <td>
                    {{$alumno->telefono}}
                </td>
                
                <td>
                    {{$alumno->observaciones}}
                </td>

                <td>
                    {{$alumno->baja}}
                </td>

                <td>
                    {{$alumno->repitente}}
                </td>
            </tr>   
            
             @empty
                    <p>No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
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
</div>
