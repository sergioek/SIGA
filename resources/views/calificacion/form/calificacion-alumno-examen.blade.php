<div>
    <x-boton-crear href="{{route('calificaciones.index')}}"/> 
<div>

        <div class="table-responsive mt-3">
            <table class="table table-hover">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Curso</th>
                    <th scope="col">Espacio</th>
                    <th scope="col">Definitiva</th>
                    <th scope="col">Condición</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Establecimiento</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
        
                <tbody>  
                    
                  
                    @forelse ($calificaciones as $key =>$calificacion)    
                    <form method="POST" action="{{route('calificaciones.update',$calificacion)}}">
                        @csrf
                        @method('PUT')   
                        <tr>

                            <td>
                                {{$calificacion->curso->curso}}
                            </td>

                            <td>
                                {{$calificacion->espacio->nombre}}
                            </td>


                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" min="1" name="cal_def" value="{{old('cal_def',$calificacion->cal_def)}}">
                                @error('cal_def')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <select name="examen" id="" class="form-control" style="width: 100px;">
                                    <option value="{{$calificacion->examen}}" selected>{{$calificacion->examen}}</option>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                </select>
                                @error('examen')
                                <br>
                                    <small class="text-danger">El campo condición es obligatorio</small>
                                <br>
                                @enderror
                            </td>

                            <td>
                                <input type="date" name="fecha" id="" class="form-control" value="{{old('fecha',$calificacion->fecha)}}">
                                @error('fecha')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                    <td>

                        @if (empty($calificacion->establecimiento))
                            
                            <input type="text" name="establecimiento" id="" class="form-control" value="ESTE ESTABLEC.">
                        @error('establecimiento')
                        <br>
                            <small class="text-danger">*{{$message}}</small>
                        <br>
                      @enderror

                                    
                        @else
                                <input type="text" name="establecimiento" id="" class="form-control" value="{{old('establecimiento',$calificacion->establecimiento)}}">
                                @error('establecimiento')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                        @endif
                                
                    </td>

                            <td>
                                <input type="text" name="observaciones" id="" class="form-control" value="{{old('observaciones',$calificacion->observaciones)}}">
                            </td>


                            <td>
                                <button type="submit" class="btn btn-success" title="Guardar nota"><i class="far fa-save">
                                </i></button>
                            </td>
                            
                            
                        </form> 
        
                        </tr>
                         
                      
                        @empty
                        <p class=" text-danger">No se encontraron resultados en su busqueda</p>
                        @endforelse 

                </tbody>  
             
              </table>

        </div>

        <div class="container">
            {{$calificaciones->links()}}
        </div>
</div>

