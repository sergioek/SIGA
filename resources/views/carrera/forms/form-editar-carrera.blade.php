<div>
    <form method="POST" action="{{route('carrera.update',$carrera)}}">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Nombre de la carrera</label>
          <input type="text" class="form-control" id=""placeholder="Nombre de la carrera" required name="nombre" value="{{old('nombre',$carrera->nombre)}}">
          @error('nombre')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>


        <div class="form-group">
            <label for="">Resolución</label>
            <input type="text" class="form-control" id=""placeholder="Resolución de la carrera" required name="resolucion" value="{{old('resolucion',$carrera->resolucion)}}">
            @error('resolucion')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Años</label>
            <input type="number" step="1" min="1" class="form-control" id=""placeholder="Años de duración" required name="años" value="{{old('años',$carrera->años)}}">
            @error('años')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
        </div>

      
        <div class="form-group">
          <label for="">Título</label>
          <input type="text" class="form-control" id=""placeholder="Título obtenido" required name="titulo" value="{{old('titulo',$carrera->titulo)}}">
          @error('titulo')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

          <x-boton-actualizar/>
      </form>
</div>