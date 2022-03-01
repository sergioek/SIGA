<style>

    @page {
           
        }
        .container{
           float: left;
        }
        
        .escala{
          
        }
        
        .pendiente{
           
            margin-top: 50px;
        }
        
        .observaciones{
            margin-top: 50px;
        }
        
        .pais{
            text-align: center;
            margin-top: 30px;
            
        }
    
        .datos{
            float:right;
            border: 3px solid black;
            width: 45%;
            text-align: center;
        }
    
        .alumno{
            text-align: left;
            padding-left: 10px;
        }
    
       
       .categoria{
         position: relative;
         display: inline;
       }
    
       .encabezado1{
            float: left;
       }
    
       .encabezado2{
         float: right;
         padding-top: 20px;
        }
    
        .materias{
            padding-top:40px; 
        }
    
        .table{
            border-collapse: collapse;
            width: 100%;
            border:3px solid black;
        }
    
        .td{
            text-align: left;
            height: 25px;
            border:1px solid black;
        }
    
        .inasistencia{
          width: 35%;
            
        }
    
        .conducta{
            width: 30%;
        }
       .notificacion{
      
            width: 35%;
          
        }
    
        .cuadro1{
            width: 48%;
        }
        .cuadro2{
            width: 24%;
        }
    
        .cuadro3{
            width: 20%;
        }
        .cuadro1,.cuadro2,.cuadro3{
            padding-top: 40px;
            display: inline-block;
           
        }
    
        .cuadro2,.cuadro3{
           
        }
    
    
        table{
            width: 500px;
            border-collapse: collapse;
            border: 3px solid black;
        }
        
        th{
            border: 2px solid black;
            height: 40px;
        }
        td{
            border: 1px solid black;
            text-align: center;
            height: 40px;
        }
        
        </style>
        
        <div class="container">
        
            <div class="escala">
                <table>
                    <thead>
                        <tr>
                            <th>ESCALA</th>
                            <th>RESULTADO</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>6 a 10</td>
                            <td>APROBADO</td>
                        </tr>
                        <tr>
                            <td>1 a 5</td>
                            <td>DESAPROBADO (Recupera)</td>
                        </tr>
                    </tbody>
                </table>
        
            </div>
        
        
            <div class="pendiente">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4">ESPACIOS PENDIENTES DE APROBACIÓN</th>
                        </tr>
        
                        <tr>
                            <th>ESPACIO CURRICULAR</th>
                            <th>FECHA</th>
                            <th>CAL. NÚMERO</th>
                            <th>CAL. LETRAS</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            
        
            <div class="observaciones">
                <table>
                    <thead>
                        <tr>
                            <th>OBSERVACIONES</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td style="height: 80px;">
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <div class="pais">
                <strong>REPÚBLICA ARGENTINA</strong>
            </div>
        </div>
        
        <div class="datos">
            <h3>SUPERIOR GOBIERNO DE LA PROVINCIA DE SANTIAGO DEL ESTERO</h3>
            <h4>SUBSECRETARÍA DE EDUCACIÓN Y CULTURA</h4>
            <h5>CONSEJO GENERAL DE EDUCACIÓN</h5>
            <h6 style="text-transform:uppercase;">DIRECCIÓN GENERAL DE NIVEL {{$establecimiento->nivel}}</h6>
    
            <img src="{{url('storage/img/escudo.png')}}" alt="" style="width:50px;">
    
            <h3 style="text-transform:uppercase;">{{$establecimiento->nombre}}</h3>
            <div class="institucionales">
                <p class="categoria"><strong>Categoría:</strong> 1ra.</p>
                <p class="categoria"><strong>Grupo:</strong> A</p>
                <p class="categoria"><strong>Modalidad:</strong> J. Simple</p>
                <p class="categoria"><strong>CUE:</strong> {{$establecimiento->cue}}</p>
            </div>
    
            <h4>LIBRETA DE CLASIFICACIONES</h4>
    
            <div class="alumno" style="font-size: 15px;">
                <p><strong>N° de inscripcion: </strong>{{$inscripcion->id}}</p>
                <p><strong>Alumno/a: </strong>{{$alumno->apellidos . " " . $alumno->nombres}}</p>
                <p><strong>DNI N°: </strong>{{$alumno->dni}}</p>
                <p><strong>Curso: </strong>{{$curso->division->curso->curso . " " . $curso->division->division->division}}</p>
                <p><strong>Domicilio: </strong>{{$alumno->direccion}}</p>
                <p><strong>Tutor/a: </strong>{{$inscripcion->tutor->apellido . " " . $inscripcion->tutor->nombre}}</p>
                <p><strong>DNI Tutor/a: </strong>{{$inscripcion->tutor->tutordni}}</p>
            </div>
    
            <h4>AÑO {{$inscripcion->ciclo->ciclo}}</h4>
        </div>
    <div style="display:block;
    page-break-before:always;"></div>
    
    <div >
        <h3 class="encabezado1" >{{$establecimiento->nombre}}</h3>
        <strong class="encabezado2">{{"Año " . $inscripcion->ciclo->ciclo.":" . '"'.$inscripcion->ciclo->lema . '"'}}</strong>
    </div>
    
    <div class="materias">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th colspan="2">1er Cuatrimestre</th>
                    <th colspan="2">2do Cuatrimestre</th>
                    <th colspan="2">Evaluación Final</th>
                    <th colspan="2">Periodo Recup Diciembre</th>
                    <th colspan="2">Periodo Recup Febrero</th>
                    <th colspan="2">Calificación Definitiva</th>
                    <th></th>
                </tr>
                <tr>
                    <th>ESPACIOS CURRICULARES</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Nº</th>
                    <th>Letras</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
    
            <tbody> 
                @foreach ($espacios as $espacio)
                <tr>
                    <td class="td">{{$espacio->nombre}}</td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                    <td class="td"></td>
                   
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    
    <div class="cuadro1">
        <table class="inasistencia">
            <thead>
                <tr>
                   <th rowspan="2">1er Cuatrim</th>
                   <th>Dias hábiles</th>
                   <th>Inasistencia</th> 
                   <th rowspan="2">2do Cuatrim</th>
                   <th>Dias hábiles</th>
                   <th>Inasistencia</th>
                   <th>Total Inasistencias</th>
                </tr>        
            </thead>
        
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        
                <tr>
                    <td style="border:2px solid black;">%</td>
                    <td colspan="2"></td>
                    <td style="border:2px solid black;">%</td>
                    <td colspan="2"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
    
    <div class="cuadro2">
        <table class="conducta">
            <thead>
                <tr>
                    <th rowspan="2">Conducta</th>
                    <th>1er Cuatrim</th>
                    <th>2do Cuatrim</th>
                </tr>
            </thead>
        
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Amonestaciones</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <div class="cuadro3">
    <table class="notificacion">
        <thead>
            <tr>
                <th>Notificación</th>
                <th>1er Cuatrimestre</th>
                <th>2do Cuatrimestre</th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td>Firma del Tutor</td>
                <td></td>
                <td></td>
            </tr>
    
            <tr>
                <td>Firma del Directivo</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
    </div>
    