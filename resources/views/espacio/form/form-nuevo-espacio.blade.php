<div>
    <form method="POST" action="{{route('espacio.store')}}">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="">Curso</label>
          <select id="" name="curso_id" class="form-control">
              @foreach ($cursos as $curso)
                   <option value="{{$curso->id}}">{{$curso->curso}}</option>
              @endforeach
          </select>
          @error('curso_id')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>



        <div class="form-group">
            <label for="">Nombre del espacio</label>
            <input type="text" name="nombre" class="form-control" id="" placeholder="Ingrese el nombre del espacio" value="{{old('nombre')}}">
            @error('nombre')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Horas cátedras</label>
            <input type="number" name="horas" min="1" step="1" class="form-control" id="" placeholder="Horas cátedras" value="{{old('horas')}}">
            @error('horas')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Turno</label>
            <select id="" name="turno" class="form-control">
              <option value="MAÑANA">MAÑANA</option>
              <option value="TARDE">TARDE</option>
              <option value="MAÑANA-TARDE">MAÑANA-TARDE</option>
              <option value="MAÑANA">NOCHE</option>
            </select>
            @error('turno')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Carerra</label>
            <select id="" name="carrera_id" class="form-control">
                @foreach ($carreras as $carrera)
                     <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                @endforeach
            </select>
            @error('carrera_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <x-boton-guardar/>
      </form>
</div>