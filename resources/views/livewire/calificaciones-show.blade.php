<div>

    <x-input-buscar placeholder="{{$placeholder='Ingrese un nombre o DNI para buscar un alumno'}}"/>  

<div class="table-responsive ">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Legajo Nº</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombres</th>
            <th scope="col">DNI</th>
            <th scope="col">Estado</th>
            <th scope="col" class="collapse" id="Options"></th>
            <th scope="col" class="collapse" id="Options"></th>
          </tr>
        </thead>

        <tbody>
            @forelse ($alumnos as $alumno) 
            @if ($alumno->baja!==null)
                <tr class="text-danger" href="#Options" data-toggle="collapse">
            @else
              <tr href="#Options" data-toggle="collapse">  
            @endif           
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
                   
                       {{$alumno->dni}}
            
                </td>

                <td>
                    {{$alumno->baja}}
                </td>

                <x-nota-regular href="{{route('calificaciones.edit',$alumno->id)}}"/>

                
                <x-nota-examen href="{{route('calificaciones.show',$alumno->id)}}"/>
                    
        </tr>
            
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
</div>
        <div class="container">
            {{$alumnos->links()}}
        </div>
</div>
