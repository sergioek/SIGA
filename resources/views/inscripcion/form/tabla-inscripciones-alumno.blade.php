<div>
    
<div class="table-responsive ">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Curso</th>
            <th scope="col">Ciclo</th>
            <th scope="col">Alumno</th>
            <th scope="col">DNI</th>
            <th scope="col">Sexo</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">Lugar</th>
            <th scope="col">Dirección</th>
            <th scope="col">Discapacidad</th>
            <th scope="col">Pase</th>
            <th scope="col">Repitente</th>
            <th scope="col">Estado</th>
            <th scope="col">Tutor</th>
            <th scope="col">DNI</th>
            <th scope="col">Parentezco</th>
            <th scope="col">Ocupacion</th>
            <th scope="col">Teléfono</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
            @forelse ($inscriptos as $inscripto)            
            <tr>
              

                <td >
                    {{$inscripto->id}}
                </td>


                <td >
                    {{$inscripto->curso->curso}}
                </td>

                <td >
                    {{$inscripto->ciclo->ciclo}}
                </td>


                <td >
                    {{$inscripto->alumno->apellidos." " .$inscripto->alumno->nombres}}
                </td>

                <td >
                    {{$inscripto->alumno->dni}}
                </td>

                <td >
                    {{$inscripto->alumno->sexo}}
                </td>

                <td>
                    {{$newDate = date("d-m-Y", strtotime($inscripto->alumno->fnacimiento))}}
                </td>

                <td >
                    {{$inscripto->alumno->lnacimiento}}
                </td>

                <td >
                    {{$inscripto->alumno->direccion}}
                </td>

                
                <td >
                    {{$inscripto->alumno->discapacidad}}
                </td>
                

                <td >
                    {{$inscripto->pase}}
                </td>

                <td >
                    {{$inscripto->repitente}}
                </td>

                <td >
                    {{$inscripto->alumno->baja}}
                </td>


                <td >
                    {{$inscripto->tutor->apellido." " .$inscripto->tutor->nombre}}
                </td>

                <td >
                    {{$inscripto->tutor->tutordni}}
                </td>

                <td >
                    {{$inscripto->parentezco->parentezco}}
                </td>

                <td >
                    {{$inscripto->ocupacion->ocupacion}}
                </td>

                <td >
                    {{$inscripto->tutor->telefono}}
                </td>


               
            <x-opcion-editar href="{{route('inscripcion.edit',$inscripto->id)}}"/>

                
            <x-opcion-eliminar href="{{route('inscripcion.destroy',$inscripto)}}"/>
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
</div>
        <div class="container offset-lg-9">
            {{$inscriptos->links()}}
        </div>
</div>
