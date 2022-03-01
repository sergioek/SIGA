<div>
    
    <x-mensajes/>
        <div class="col-lg-4 mt-3 mb-3">
            <label for="">Curso</label>
            <select name="" wire:model.debounce.500ms="search" id="" class="form-control col-lg-4">
                <option></option>
                @foreach ($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->curso}}</option>
                @endforeach
            </select>
        </div>

    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-dark ">
              <tr>
                <th scope="col">Alumno</th>
                <th scope="col">Ciclo</th>
                <th scope="col">Curso</th>
                <th scope="col">Asignar</th>
                <th scope="col"></th>
              </tr>
            </thead>


            <tbody>
                @forelse ($asignaciones as $asignacion) 
                <!----No muestra los alumnos que esten de baja----->
                @if (empty($asignacion->inscripcion->alumno->baja))
                    
                <tr>
                 
                    <td>
                        {{$asignacion->inscripcion->alumno->apellidos . " " . $asignacion->inscripcion->alumno->nombres}}
                    </td>

                    <td>
                        {{$asignacion->ciclo->ciclo}}
                    </td>

                    <td>
                        {{$asignacion->curso->curso}}
                    </td>

                   
                    <td>
                        <select name="grupo_id" id="" class="form-control" wire:model.debounce.500ms="division">
                            <option></option>
                            @foreach ($divisiones as $division)
                                <option value="{{$division->id}}">{{$division->curso->curso . " " .$division->division->division . " " . $division->carrera->nombre }}</option>
                            @endforeach
                        </select>
                    </td>

                    <td>
                        <input type="button" wire:click="update({{$asignacion}})" value="Ejecutar" class="btn btn-secondary">
                    </td>
                    
                </tr>
                @endif
            
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table>
       
    </div>

    <!--------Si existe alumnos cargados, se muestra la paginacion-------->
    @if (!empty($asignacion))
        <div class="container">
            {{$asignaciones->links()}}
        </div> 
    @endif
   
</div>
