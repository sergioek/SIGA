<div>
        <div>
    
            <x-boton-crear href="{{route('ciclo.create')}}"/> 
            
            <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar un ciclo'}}"/>  
        
        <div class="table-responsive ">
            <table class="table  table-hover">
                <thead class="table-dark ">
                  <tr>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Lema</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Cierre</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
    
    
                <tbody>
                    @forelse ($ciclos as $ciclo)            
                    <tr href="#Options" data-toggle="collapse">
                        <td>
                            {{$ciclo->ciclo}}
                        </td>
    
                        <td>
                            {{$ciclo->lema}}        
                        </td> 
    
                        <td>
                            {{$newDate = date("d-m-Y", strtotime($ciclo->inicio))}}        
                        </td> 

                        <td>
                            {{$newDate = date("d-m-Y", strtotime($ciclo->cierre))}}        
                        </td> 
    
                        <x-opcion-editar href="{{route('ciclo.edit',$ciclo->id)}}"/>
    
                        <x-opcion-eliminar href="{{route('ciclo.destroy',$ciclo)}}"/>
                    </tr>
                        
                        @empty
                            <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                    @endforelse 
                </tbody>
              </table>
        </div>
                <div class="container">
                    {{$ciclos->links()}}
                </div>
    </div>
    
</div>
