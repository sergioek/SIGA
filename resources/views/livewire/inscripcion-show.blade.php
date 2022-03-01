<div>
    
    <x-boton-crear href="{{route('inscripcion.create')}}"/> 
    
    
    <div class="col-lg-4 mt-3">
        <label for="">Ciclo Lectivo</label>
        <select name="" wire:model.debounce.500ms="filtro" id="" class="form-control col-lg-4"> 
            @foreach ($ciclos as $ciclo)
                <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
            @endforeach
        </select>
    </div>
      
    <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar un alumno por su número de inscripción'}}"/>  
    
<div class="table-responsive ">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Curso</th>
            <th scope="col">Alumno</th>
            <th scope="col">DNI</th>
            <th scope="col">Sexo</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">Lugar Nac.</th>
            <th scope="col">Dirección</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($inscriptos as $inscripto)  
            
            @if ($inscripto->alumno->baja!==null)
                <tr class="text-danger" href="#Options" data-toggle="collapse">
            @else
               <tr href="#Options" data-toggle="collapse"> 
            @endif
            
                <td >
                    {{$inscripto->id}}
                </td>


                <td >
                    {{$inscripto->curso->curso}}
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
            
            <x-boton-imprimir href="{{route('inscripcion.print',$inscripto->id)}}"/>

            <x-opcion-editar href="{{route('inscripcion.edit',$inscripto->id)}}"/>
           

            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
       
      </table>
</div>
        <div class="container">
            {{$inscriptos->links()}}
        </div>
</div>
