<div>

    
    <div class="col-lg-12 mt-3 mb-3">
        <label for="">Curso</label>
        <select name="" wire:model.debounce.500ms="search" id="" class="form-control col-lg-12">
            <option ></option>
            @foreach ($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->curso->curso . " ".$curso->division->division . " " . $curso->carrera->nombre}}</option>
            @endforeach
        </select>
    </div>


        
    <div class="col-lg-12 mt-3 mb-3">
        <label for="">Ciclo</label>
        <select name="" wire:model.debounce.500ms="año" id="" class="form-control col-lg-12">
            <option ></option>
            @foreach ($ciclos as $ciclo)
                <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
            @endforeach
        </select>
    </div>


     
    <a href="#Options" data-toggle="collapse">
        <button class="btn-small btn-success mt-3 mb-2 offset-lg-10"><i class="fas fa-cogs" title="Ver las opciones">
            </i> Ajustes
        </button>
    </a>
<div class="table-responsive ">
    <table class="table  table-hover">
        <thead class="table-dark ">
          <tr>
            <th scope="col">Alumno</th>
            <th scope="col">DNI Nº</th>
            <th scope="col">Ciclo</th>
            <th scope="col"></th>
          </tr>
        </thead>


        <tbody>
            @forelse ($asignaciones as $asignacion) 
                
            <tr href="#Options" data-toggle="collapse">
             
                <td>
                    {{$asignacion->inscripcion->alumno->apellidos . " " . $asignacion->inscripcion->alumno->nombres}}
                </td>

                <td>
                    {{$asignacion->inscripcion->alumno->dni}}
                </td>

                <td>
                    {{$asignacion->ciclo->ciclo}}
                </td>


                
                <x-opcion-editar href="{{route('asignardivision.edit',$asignacion)}}"/>

            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
</div>
        <div class="container">
            {{$asignaciones->links()}}
        </div>
</div>
