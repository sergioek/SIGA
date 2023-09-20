<div>
    <div>
        <div class="table-responsive ">
            <table class="table table-hover">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Legajo</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Nac.</th>
                    <th scope="col">DNI</th>
                    <th scope="col">CUIL</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nacimiento</th>
                  </tr>
                </thead>
        
                <tbody>
                    @forelse ($alumnos as $alumno) 
                    
                    @if ($newDate = date("m-d", strtotime($alumno->fnacimiento)) == $fechaHoy)
                    <tr>
                        <td >
                            {{$alumno->legajo}}
                        </td>
        
                        <td>
                            {{$alumno->apellidos}}
                        </td>
        
                        <td>
                            {{$alumno->nombres}}
                        </td>
        
                        <td>
                            {{$alumno->nacionalidad}}
                        </td>
        
                        <td>
                            {{$alumno->dni}}
                        </td>
        
                        <td>
                            {{$alumno->cuil}}
                        </td>
        
                        <td>
                            {{$alumno->sexo}}
                        </td>
        
                        <td>
                            {{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}
                        </td>
            
                </tr>
                    @endif
                   
                    
                   
                        @empty
                            <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                    @endforelse 
                </tbody>
              </table>
        </div>
          
        </div>
        
</div>
