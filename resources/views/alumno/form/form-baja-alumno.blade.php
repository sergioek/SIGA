<div>
    <form method="POST" action="{{route('alumno.down',$alumno)}}">
        @method('PUT')
        @csrf

          <div class="form-group">
            <label for="">Baja</label>
            <select name="baja" id="" class="form-control" required>
                <option value="{{$alumno->baja}}" selected>{{$alumno->baja}}</option>
                <option  value="SALIDO SIN PASE">SALIDO SIN PASE</option>
                <option  value="SALIDO CON PASE">SALIDO CON PASE</option> 
                <option value="FALLECIMIENTO">FALLECIMIENTO</option>
                <option  value="CAMBIO DE TITULACIÓN">CAMBIO DE TITULACIÓN</option>  
            </select>
            
            @error('baja')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Fecha de Baja</label>
            <input type="date" name="fecha_baja" id="" class="form-control" required value="{{$alumno->fecha_baja}}">
            @error('fecha_baja')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Observaciones</label>
            <textarea name="observaciones_baja" id="" cols="30" rows="10" class="form-control">{{$alumno->observaciones_baja}}</textarea>
            @error('observaciones_baja')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <x-boton-actualizar/>
      </form>
</div>