<style>
    
    @page {
          margin-left: 1cm;
          margin-right: 1cm; 
        }

    table{
       
        width: 100%;
        border-collapse: collapse;

    }

    th{
        border:3px solid black; 
        height: 30px;
        background-color: white;
  
    }
   
    td {
        vertical-align:bottom;
        border: 1px solid black;
        height: 30px;
        padding-bottom: 5px;
        padding-left: 10px;
    }

    .title{
        font-style: bold;
    }
    h3{
        text-align: center;
    }
</style>


<x-membrete-a4 ciclo="{{$ciclo->ciclo}}" lema="{{$ciclo->lema}}" nombre="{{$establecimiento->nombre}}" cue="{{$establecimiento->cue}}" nivel="{{$establecimiento->nivel}}" direccion="{{$establecimiento->direccion}}"/>

<h3>FICHA DE DATOS DE ALUMNOS</h3>
<div style="padding-top:10px;">

    <table>
        <thead>
            <tr>
                <th>DATOS</th>
                <th></th>
            </tr>
        </thead>
    
        <tbody>
           
            <tr>
                <td class="title">Legajo Nº</td>
                <td>{{$alumno->legajo}}</td>
            </tr>

            <tr>
                <td class="title">Apellidos y nombres</td>
                <td>{{$alumno->apellidos . " " . $alumno->nombres}}</td>
            </tr>
    
            <tr>
                <td class="title">Nacionalidad</td>
                <td>{{$alumno->nacionalidad}}</td>
            </tr>
    
            <tr>
                <td class="title">DNI</td>
                <td>{{$alumno->dni}}</td>
            </tr>
    
            <tr>
                <td class="title">CUIL</td>
                <td>{{$alumno->cuil}}</td>
            </tr>
    
            <tr>
                <td class="title">Sexo</td>
                <td>{{$alumno->sexo}}</td>
            </tr>
    
            <tr>
                <td class="title">Fecha de Nacimiento</td>
                <td>{{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}</td>
            </tr>
    
            <tr>
                <td class="title">Lugar de Nacimiento</td>
                <td>{{$alumno->lnacimiento}}</td>
            </tr>
    
            <tr>
                <td class="title">Domicilio</td>
                <td>{{$alumno->domicilio->nombre}}</td>
            </tr>
    
            <tr>
                <td class="title">Dirección</td>
                <td>{{$alumno->direccion}}</td>
            </tr>
    
            <tr>
                <td class="title">Discapacidad</td>
                <td>{{$alumno->discapacidad}}</td>
            </tr>
    
            <tr>
                <td class="title">Tipo de discapacidad</td>
                <td>{{$alumno->tipo_discapacidad}}</td>
            </tr>
    
            <tr>
                <td class="title">AUH</td>
                <td>{{$alumno->auh}}</td>
            </tr>
    
            <tr>
                <td class="title">Obra social</td>
                <td>{{$alumno->obrasocial}}</td>
            </tr>
    
            <tr>
                <td class="title">¿Baja?</td>
                <td>{{$alumno->baja}}</td>
            </tr>
    
            <tr>
                <td class="title">Fecha de baja</td>
                <td>{{$alumno->fecha_baja}}</td>
            </tr>
    
            <tr>
                <td class="title">Observaciones de baja</td>
                <td>{{$alumno->observaciones_baja}} </td>
            </tr>
            
        </tbody>
    </table>
</div>


<div style="padding-top: 40px;">
    <footer>
        
        <p><strong>Para comunicarnos:</strong>{{$establecimiento->correo}} - <strong>Teléfono:</strong>
        {{$establecimiento->telefono}}
        </p>
    </footer>
</div>
