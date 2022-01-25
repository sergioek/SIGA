<div>
    <div>

        <x-boton-crear href="{{route('curso.create')}}"/> 
        
        <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar el nombre de un curso'}}"/>  
    
    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-dark ">
              <tr>
                <th scope="col">Curso</th>
                <th scope="col">Division</th>
                <th scope="col">Carrera</th>
                <th scope="col">Preceptor/a</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>


            <tbody>
                @forelse ($cursos as $curso)            
                <tr href="#Options" data-toggle="collapse">
                    <td>
                        {{$curso->curso->curso}}
                    </td>

                    <td>
                        {{$curso->division->division}}        
                    </td> 

                    <td>
                        {{$curso->carrera->nombre}}        
                    </td> 

                    <td>
                        {{$curso->preceptor}}        
                    </td> 


                    <x-opcion-editar href="{{route('curso.edit',$curso->id)}}"/>

                    <x-opcion-eliminar href="{{route('curso.destroy',$curso)}}"/>
                </tr>
                    
                    @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                @endforelse 
            </tbody>
          </table>
    </div>
            <div class="container">
                {{$cursos->links()}}
            </div>
</div>

</div>
