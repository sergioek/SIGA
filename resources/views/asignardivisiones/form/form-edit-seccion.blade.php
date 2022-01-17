<div>
    <form method="POST" action="{{route('asignardivision.update',$asignacion)}}">
        @method('PUT')
        @csrf

        <input type="hidden" name="id" id="" value="{{$asignacion->id}}">
        <div class="form-group">
          <label for="">Curso y división</label>
            <select name="grupo_id" id="" class="form-control" required>
                @foreach ($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->curso->curso . " ".$curso->division->division}}</option>
                 @endforeach
            </select>
          @error('grupo_id')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

          <x-boton-actualizar/>
      </form>
</div>