<div>

    <h4 class="text-primary">ESTADÍSTICA DEL ESTABLECIMIENTO</h4>
    <div class="col-lg-12 mt-3 mb-3">
        <label for="">Ciclo</label>
        <select name="" wire:model.debounce.500ms="año" id="" class="form-control col-lg-12">
            <option></option>
            @foreach ($ciclos as $ciclo)
                <option value="{{$ciclo->id}}" selected>{{$ciclo->ciclo}}</option>
            @endforeach
        </select>
    </div>


    <div class="col-lg-12 mt-3 mb-3">
        <label for="">Curso</label>
        <select name="" wire:model.debounce.500ms="curso" id="" class="form-control col-lg-12">
            <option></option>
            @foreach ($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->curso->curso . " " . $curso->division->division . " " . $curso->carrera->nombre}}</option>
            @endforeach
        </select>
    </div>



    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-dark ">
              <tr>
                <th scope="col">Curso</th>
                <th scope="col">Division</th>
                <th scope="col">Varones</th>
                <th scope="col">Mujeres</th>
                <th scope="col">Subtotal</th>
              </tr>

           
            </thead>


            <tbody>
                
                @if ($subtotal!=0)
                <tr>
                    
                    @foreach ($seccion as $item)
                        <td>{{$item->curso->curso}}</td>
                        <td>{{$item->division->division}}</td>
                    @endforeach  
                   
                 
                        <td>{{$varones}}</td>
                        <td>{{$mujeres}}</td>
                        <td>{{$subtotal}}</td>  
    
                </tr>
                       
                @endif
               
            </tbody>
          </table>
    </div>

    <div class="mt-4">
    <h5 class="text-danger">MATRÍCULA TOTAL</h5>
    <div class="table-responsive ">
        <table class="table  table-hover">
            <thead class="table-primary ">
              <tr>
                <th scope="col">Curso</th>
                <th scope="col">Division</th>
                <th scope="col">Varones</th>
                <th scope="col">Mujeres</th>
                <th scope="col">Total</th>
              </tr>

           
            </thead>


            <tbody>
                
                
                <tr>
                    
                    <td>TODOS</td>
                    <td>TODOS</td>
                    <td>{{$total_varones}}</td>
                    <td>{{$total_mujeres}}</td>
                    <td>{{$total}}</td>
                </tr>
                    
            
                  
            </tbody>
          </table>
    </div>

</div>

</div>
