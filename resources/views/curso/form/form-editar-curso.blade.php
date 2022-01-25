<div>
    <form method="POST" action="{{route('curso.update',$Curso)}}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Curso </label>
          <select id="" name="curso_id" class="form-control">
             <option value="{{$Curso->curso->id}}" selected>{{$Curso->curso->curso}}</option>
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
            <label for="">División</label>
            <select id="" name="division_id" class="form-control">
                <option value="{{$Curso->division->id}}" selected>{{$Curso->division->division}}</option>
                @foreach ($divisiones as $division)
                     <option value="{{$division->id}}">{{$division->division}}</option>
                @endforeach
            </select>
            @error('division_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Carrera</label>
            <select id="" name="carrera_id" class="form-control">
                <option value="{{$Curso->carrera->id}}" selected>{{$Curso->carrera->nombre}}</option>
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


          <div class="form-group">
            <label for="">Preceptor/a</label>
            <input type="text" name="preceptor" id="" class="form-control" required value="{{old('preceptor',$Curso->preceptor)}}">
            @error('preceptor')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <x-boton-actualizar/>
      </form>
</div>