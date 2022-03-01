    <style>

        @page {
            margin-top: 0cm;
		    margin-left: 2cm;
		    margin-right: 0.5cm;
	    }
         .table{
        margin-top: 10px;
        width: 100%;
        border-collapse: collapse;
        padding-left: 40px;
        font-size: 15px;
       
        }
    
        .td{
            height: 5px;
            border: 1px solid white;
        }

        table{
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 5px;
            width: 100%;
            border-collapse: collapse;
            
            
        }

        th{
            border: 2px solid black;
            height: 30px;
        }

        td{
            border: 1px solid black;
            height: 3px;
        }
        
        
    </style>
    
    
<x-membrete-b4 ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>
    
<div style="text-align:center;">
    <strong >{{'"' .$curso->carrera->nombre . '"'}} </strong>   
</div>

    
    <table class="table">
        <tbody>
        <tr class="">
            <td class="td"> 
                <strong>Alumno/a: </strong>{{$alumno->apellidos. " " . $alumno->nombres}}
            </td>
    
            <td class="td" colspan="3">
                <strong>Matrícula: </strong>{{$matricula->inscripcion->id}}
            </td>
        </tr>
        
        <tr>
            <td class="td">
                <strong>DNI Nº: </strong>{{$alumno->dni}}
            </td>
    
            <td class="td">
                <strong>Nacido en: </strong>{{$alumno->lnacimiento}}
            </td>
    
            <td class="td" colspan="3">
                <strong>Fecha: </strong>
                {{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}
            </td>
        </tr>
    
        <tr>
            <td class="td">
                <strong>Curso: </strong>{{$curso->curso->curso . " " . $curso->division->division}}
            </td>
    
            <td class="td" colspan="3">
                <strong>Año: </strong>{{$ciclo->ciclo}}
            </td>
    
         
            <td class="td" colspan="3">
                <strong>Folio: </strong>{{$folio}}
            </td>
        </tr>
       
        </tbody>
    </table>
    
    
<table style="border: 3px solid black;">
    <thead>
        <tr>
            <th style="width: 250px;">ESPACIO CURRICULAR</th>
            <th>1º CUAT.</th>
            <th>2º CUAT.</th>
            <th>EVAL. FINAL</th>
            <th>REC. DIC.</th>
            <th>REC. FEB.</th>
            <th>CALIF. DEF.</th>
            <th>OBSERVACIONES</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($calificaciones as $calificacion)
            
        
        <tr>
            <td style="padding-left: 5px;">
                {{$calificacion->espacio->nombre}}
            </td>
            <td style="text-align: center;">
                {{$calificacion->nota_1}}
            </td>
            <td style="text-align: center;">
                {{$calificacion->nota_2}}
            </td>
            <td style="text-align: center;">
                {{$calificacion->nota_fin}}
            </td>
            <td style="text-align: center;">
                    {{$calificacion->nota_dic}} 
            </td>
            <td style="text-align: center;">
                {{$calificacion->nota_feb}} 
            </td>
            <td style="text-align: center;">
                @if (empty($calificacion->cal_def))
                   {{'A'}} 
                @else
                   {{$calificacion->cal_def}}  
                @endif
            </td>
            <td>
                {{$calificacion->observaciones}}
            </td>
        </tr>
    
        @endforeach

        <tr>
            <td><strong>Inasistencia:</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="4" style="text-align: center; border: 2px solid black;"><strong>PROMEDIO GENERAL:</strong></td>
           
        </tr>

        <tr>
            <td><strong>Amonestaciones:</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="4" rowspan="2" style="text-align: center; border: 2px solid black;">{{round($promedio/$materias,2)}}</td>
        </tr>


        <tr>
            <td><strong>Condcuta:</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
        <tr>
            <td colspan="8"><strong>Observaciones: </strong>{{$observaciones}}</td>
          
        </tr>

    </tbody>

</table>    



<!-------alumno2----->
<div style="padding-top: 40px;">
@if (!empty($alumno2))
<table class="table">
    <tbody>
    <tr class="">
        <td class="td"> 
            <strong>Alumno/a: </strong>{{$alumno2->apellidos. " " . $alumno2->nombres}}
        </td>

        <td class="td" colspan="3">
            <strong>Matrícula: </strong>{{$matricula2->inscripcion->id}}
        </td>
    </tr>
    
    <tr>
        <td class="td">
            <strong>DNI Nº: </strong>{{$alumno2->dni}}
        </td>

        <td class="td">
            <strong>Nacido en: </strong>{{$alumno2->lnacimiento}}
        </td>

        <td class="td" colspan="3">
            <strong>Fecha: </strong>{{$alumno2->fnacimiento}}
        </td>
    </tr>

    <tr>
        <td class="td">
            <strong>Curso: </strong>{{$curso->curso->curso . " " . $curso->division->division}}
        </td>

        <td class="td" colspan="3">
            <strong>Año: </strong>{{$ciclo->ciclo}}
        </td>

     
        <td class="td" colspan="3">
            <strong>Folio: </strong>{{$folio}}
        </td>
    </tr>
   
    </tbody>
</table>


<table style="border: 3px solid black;">
<thead>
    <tr>
        <th style="width: 250px;">ESPACIO CURRICULAR</th>
        <th>1º CUAT.</th>
        <th>2º CUAT.</th>
        <th>EVAL. FINAL</th>
        <th>REC. DIC.</th>
        <th>REC. FEB.</th>
        <th>CALIF. DEF.</th>
        <th>OBSERVACIONES</th>
    </tr>
</thead>

<tbody>

    @foreach ($calificaciones2 as $calificacion)
        
    
    <tr>
        <td style="padding-left: 5px;">
            {{$calificacion->espacio->nombre}}
        </td>
        <td style="text-align: center;">
            {{$calificacion->nota_1}}
        </td>
        <td style="text-align: center;">
            {{$calificacion->nota_2}}
        </td>
        <td style="text-align: center;">
            {{$calificacion->nota_fin}}
        </td>
        <td style="text-align: center;">
               {{$calificacion->nota_dic}}  
        </td>
        <td style="text-align: center;">
                {{$calificacion->nota_feb}} 
        </td>

        <td style="text-align: center;">
            @if (empty($calificacion->cal_def))
                {{'A'}}
            @else
                {{$calificacion->cal_def}} 
            @endif
        </td>
        <td>
            {{$calificacion->observaciones}}
        </td>
    </tr>

    @endforeach

    <tr>
        <td><strong>Inasistencia:</strong></td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="4" style="text-align: center; border: 2px solid black;"><strong>PROMEDIO GENERAL:</strong></td>
       
    </tr>

    <tr>
        <td><strong>Amonestaciones:</strong></td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="4" rowspan="2" style="text-align: center; border: 2px solid black;">{{round($promedio2/$materias,2)}}</td>
    </tr>


    <tr>
        <td><strong>Condcuta:</strong></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
   
    <tr>
        <td colspan="8"><strong>Observaciones: </strong>{{$observaciones2}}</td>
      
    </tr>

</tbody>

</table>


<footer>

    <div style="text-align: right; padding-right:40px;">
        <p style="font-weight: bold;">{{'Pág.'.$folio}}</p >
    </div>
    
</footer>
@else


<footer>

    <div style="text-align: right; margin-right:40px; margin-top:500px;">
        <p style="font-weight: bold;">{{'Pág.'.$folio}}</p >
    </div>
    
</footer>

@endif

</div>

