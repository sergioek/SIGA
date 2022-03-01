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
        height: 20px;
        background-color: white;
  
    }
   
    td {
        vertical-align:bottom;
        border: 1px solid black;
        height: 5px;
        padding-bottom: 2px;
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

<h3>FICHA DE INSCRIPCIÓN</h3>
<div style="padding-top:0px;">

    <table>
        <thead>
            <tr>
                <th>DATOS</th>
                <th></th>
            </tr>
        </thead>
    
        <tbody>
           
            <tr>
                <td class="title">Inscripción Nº</td>
                <td>{{$inscripcion->id}}</td>
            </tr>

            <tr>
                <td class="title">Ciclo lectivo</td>
                <td>{{$inscripcion->ciclo->ciclo}}</td>
            </tr>

            <tr>
                <td class="title">Curso</td>
                <td>{{$inscripcion->curso->curso}}</td>
            </tr>
    
            <tr>
                <td class="title">Alumno/a</td>
                <td>{{$inscripcion->alumno->apellidos." " .$inscripcion->alumno->nombres}}</td>
            </tr>
    
            <tr>
                <td class="title">DNI Alumno/a</td>
                <td>{{$inscripcion->alumno->dni}}</td>
            </tr>

            <tr>
                <td class="title">CUIL Alumno/a</td>
                <td>{{$inscripcion->alumno->cuil}}</td>
            </tr>
    
            <tr>
                <td class="title">Sexo</td>
                <td>{{$inscripcion->alumno->sexo}}</td>
            </tr>
    
            <tr>
                <td class="title">Fecha de nacimiento</td>
                <td>{{$newDate = date("d-m-Y", strtotime($inscripcion->alumno->fnacimiento))}}</td>
            </tr>
    
            <tr>
                <td class="title">Lugar de Nacimiento</td>
                <td> {{$inscripcion->alumno->lnacimiento}}</td>
            </tr>
    
            <tr>
                <td class="title">Domicilio</td>
                <td>{{$inscripcion->alumno->domicilio->nombre}}</td>
            </tr>
    
            <tr>
                <td class="title">Dirección</td>
                <td>{{$inscripcion->alumno->direccion}}</td>
            </tr>
    
            <tr>
                <td class="title">Discapacidad</td>
                <td>{{$inscripcion->alumno->discapacidad}}</td>
            </tr>
    
            <tr>
                <td class="title">Tipo de discapacidad</td>
                <td>{{$inscripcion->alumno->tipo_discapacidad}}</td>
            </tr>
    
            <tr>
                <td class="title">AUH</td>
                <td>{{$inscripcion->alumno->auh}}</td>
            </tr>
    
            <tr>
                <td class="title">Obra social</td>
                <td>{{$inscripcion->alumno->obrasocial}}</td>
            </tr>

            <tr>
                <td class="title">Pase</td>
                <td>{{$inscripcion->pase}}</td>
            </tr>

            <tr>
                <td class="title">Repitente</td>
                <td>{{$inscripcion->repitente}}</td>
            </tr>
    
            <tr>
                <td class="title">¿Baja?</td>
                <td>{{$inscripcion->alumno->baja}}</td>
            </tr>
    
            <tr>
                <td class="title">Fecha de baja</td>
                <td>{{$inscripcion->alumno->fecha_baja}}</td>
            </tr>
    
            <tr>
                <td class="title">Observaciones de baja</td>
                <td>{{$inscripcion->alumno->observaciones_baja}} </td>
            </tr>
            
            <tr>
                <td class="title">Tutor</td>
                <td>{{$inscripcion->tutor->apellido." " .$inscripcion->tutor->nombre}}</td>
            </tr>

            <tr>
                <td class="title">DNI Tutor</td>
                <td>{{$inscripcion->tutor->tutordni}}</td>
            </tr>

            <tr>
                <td class="title">CUIL Tutor</td>
                <td>{{$inscripcion->tutor->tutorcuil}}</td>
            </tr>


            <tr>
                <td class="title">Parentezco</td>
                <td> {{$inscripcion->parentezco->parentezco}}</td>
            </tr>

            <tr>
                <td class="title">Ocupación</td>
                <td>{{$inscripcion->ocupacion->ocupacion}}</td>
            </tr>

            <tr>
                <td class="title">Teléfono</td>
                <td>{{$inscripcion->tutor->telefono}}</td>
            </tr>

            <tr>
                <td class="title">Observaciones</td>
                <td> {{$inscripcion->observaciones}}</td>
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
