<div>
    <x-boton-crear href="{{route('tutor.create')}}"/> 
    <x-input-buscar placeholder="{{$placeholder='Ingrese un texto para buscar un tutor'}}"/>  

<div class="table-responsive ">
    <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombres</th>
            <th scope="col">DNI</th>
            <th scope="col">CUIL</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>


        <tbody>
            @forelse ($tutores as $tutor)            
            <tr href="#Options" data-toggle="collapse">
                <td>
                    {{$tutor->apellido}}
                </td>

                <td>
                    {{$tutor->nombre}}
                </td>

                <td>
                    {{$tutor->tutordni}}
                </td>

                <td>
                    {{$tutor->tutorcuil}}
                </td>

                <td>
                    {{$tutor->tutordireccion}}
                </td>


                <td>
                    {{$tutor->telefono}}
                </td>

                <td>
                    {{$tutor->email}}
                </td>

            <x-opcion-editar href="{{route('tutor.edit',$tutor->id)}}"/>

                
            <x-opcion-eliminar href="{{route('tutor.destroy',$tutor)}}"/>
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
</div>
        <div class="container">
            {{$tutores->links()}}
        </div>
</div>
