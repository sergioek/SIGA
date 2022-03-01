<div>

        <x-boton-crear href="{{route('carrera.create')}}"/> 
        
        <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar el nombre de una carrera'}}"/>  
    
    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-dark ">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Resolución</th>
                <th scope="col">Años</th>
                <th scope="col">Título</th>
                <th scope="col">Colegio</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>


            <tbody>
                @forelse ($carreras as $carrera)            
                <tr href="#Options" data-toggle="collapse">
                    <td>
                        {{$carrera->nombre}}
                    </td>

                    <td>
                        {{$carrera->resolucion}}        
                    </td> 

                    <td>
                        {{$carrera->años}}        
                    </td> 

                    <td>
                        {{$carrera->titulo}}        
                    </td> 

                    <td>
                        {{$carrera->colegio->nombre}}        
                    </td> 

                    <x-opcion-editar href="{{route('carrera.edit',$carrera->id)}}"/>

                    
                    <x-opcion-eliminar href="{{route('carrera.destroy',$carrera)}}"/>
                </tr>
                    
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table>
    </div>
            <div class="container">
                {{$carreras->links()}}
            </div>
</div>
