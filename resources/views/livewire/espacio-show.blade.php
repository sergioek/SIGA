<div>
    <div>

        <x-boton-crear href="{{route('espacio.create')}}"/> 
        
        <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar el nombre de un espacio'}}"/>  
    
    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-dark ">
              <tr>
                <th scope="col">Curso</th>
                <th scope="col">Nombre</th>
                <th scope="col">Horas Cat.</th>
                <th scope="col">Turno</th>
                <th scope="col">Carrera</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>


            <tbody>
                @forelse ($espacios as $espacio)            
                <tr href="#Options" data-toggle="collapse">
                    <td>
                        {{$espacio->curso->curso}}
                    </td>

                    <td>
                        {{$espacio->nombre}}
                    </td>

                    <td>
                        {{$espacio->horas}}
                    </td>

                    <td>
                        {{$espacio->turno}}
                    </td>

                    <td>
                        {{$espacio->carrera->nombre}}
                    </td>


                    <x-opcion-editar href="{{route('espacio.edit',$espacio->id)}}"/>

                    <x-opcion-eliminar href="{{route('espacio.destroy',$espacio)}}"/>
                </tr>
                    
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table>
    </div>
            <div class="container">
                {{$espacios->links()}}
            </div>
</div>

</div>
