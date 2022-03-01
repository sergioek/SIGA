<div>

    <x-boton-crear href="{{route('alumno.create')}}"/> 
    
    <x-input-buscar placeholder="{{$placeholder='Ingrese un nombre, DNI o legajo para buscar un alumno'}}"/>  

<div class="col-lg-3 mb-2">
    <label for="">Filtro:</label>
    <select name="" id="" class="form-control" wire:model.debounce.500ms="filtro">
        <option></option>
        <option value="SALIDO SIN PASE">SALIDO SIN PASE</option>
        <option value="SALIDO CON PASE">SALIDO CON PASE</option>
        <option value="FALLECIMIENTO">FALLECIMIENTO</option>
        <option value="CAMBIO DE TITULACIÓN">CAMBIO DE TITULACÓN</option>
    </select>
</div>

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
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
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

            <x-boton-imprimir href="{{route('alumno.print',$alumno->id)}}"/>

            <x-opcion-editar href="{{route('alumno.edit',$alumno->id)}}"/>

            <x-opcion-eliminar href="{{route('alumno.destroy',$alumno)}}"/>
            
            <x-boton-baja href="{{route('alumno.show',$alumno->id)}}"/> 
          
            <x-boton-alta href="{{route('alumno.up',$alumno)}}"/>
         
      
    
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
