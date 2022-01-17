<div>
    <x-boton-crear href="{{route('calificaciones.index')}}"/> 
<div>

        <div class="table-responsive mt-3">
            <table class="table table-hover">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Curso</th>
                    <th scope="col">Espacio</th>
                    <th scope="col">1º Cuatrim.</th>
                    <th scope="col">2º Cuatrim.</th>
                    <th scope="col">NotaFinal</th>
                    <th scope="col">Taller Int. Diciembre</th>
                    <th scope="col">Taller Int. Febrero</th>
                    <th scope="col">Definitiva</th>
                    <th scope="col">Condición</th>
                    <th scope="col">Fecha</th>
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
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="nota_1" value="{{$calificacion->nota_1}}">
                                @error('nota_1')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="nota_2" value="{{$calificacion->nota_2}}">
                                @error('nota_2')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="nota_fin" value="{{$calificacion->nota_fin}}">
                                @error('nota_fin')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="nota_dic" value="{{$calificacion->nota_dic}}">
                                @error('nota_dic')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="nota_feb" value="{{$calificacion->nota_feb}}">
                                @error('nota_feb')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <input type="number"  id="" class="form-control" step="0.25" max="10" name="cal_def" value="{{$calificacion->cal_def}}">
                                @error('cal_def')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
                            </td>

                            <td>
                                <select name="examen" id="" class="form-control" style="width:60px;">
                                    <option value="{{$calificacion->examen}}" selected>{{$calificacion->examen}}</option>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                </select>
                                @error('examen')
                                <br>
                                    <small class="text-danger">El campo condición es obligatorio</small>
                                <br>
                                @enderror
                            </td>

                            <td>
                                <input type="date" name="fecha" id="" class="form-control" value="{{$calificacion->fecha}}" style="width: 160px;">
                                @error('fecha')
                                <br>
                                    <small class="text-danger">*{{$message}}</small>
                                <br>
                              @enderror
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

