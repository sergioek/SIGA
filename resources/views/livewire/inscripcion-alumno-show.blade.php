<div>

    <x-boton-crear href="{{route('inscripcion.create')}}"/> 
    
    <x-input-buscar placeholder="{{$placeholder='Ingrese un nombre, DNI o legajo para buscar un alumno'}}"/>  

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Legajo</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombres</th>
            <th scope="col">Nac.</th>
            <th scope="col">DNI</th>
            <th scope="col"></th>
          </tr>
        </thead>


        <tbody>
            @forelse ($alumnos as $alumno)         
            @if ($alumno->baja!==null)
            
                <tr class="text-danger" href="#Options" data-toggle="collapse" >
           
             @else
             
                <tr href="#Options" data-toggle="collapse"> 
            @endif      
                <td>
                    {{$alumno->legajo}}
                </td>


                <td>
                    <a href="{{route('inscripcion.show',$alumno->id)}}">
                        {{$alumno->apellidos}}
                    </a>
                </td>

                <td>
                    <a href="{{route('inscripcion.show',$alumno->id)}}">
                        {{$alumno->nombres}}
                    </a>
                </td>

                <td>
                    {{$alumno->nacionalidad}}
                </td>

                <td>
                    {{$alumno->dni}}
                </td>

                <x-boton-ver href="{{route('inscripcion.show',$alumno->id)}}"/>

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
