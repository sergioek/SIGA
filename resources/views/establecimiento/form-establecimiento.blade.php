<div>
    <form method="POST" action="{{route('establecimiento.update',$establecimiento)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Nivel</label>
          <select name="nivel" id="" class="form-control">
            <option value="{{$establecimiento->nivel}}" selected>{{$establecimiento->nivel}}</option>
            <option value="Primario">Primario</option>
            <option value="Secundario">Secundario</option>
            <option value="Superior">Superior</option>
          </select>
          @error('nivel')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" id=""placeholder="Nombre del establecimiento" required name="nombre" value="{{old('nombre',$establecimiento->nombre)}}">
          @error('nombre')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>


        <div class="form-group">
            <label for="">CUE ANEXO</label>
            <input type="text" class="form-control" id=""placeholder="CUE" required name="cue" value="{{old('cue',$establecimiento->cue)}}">
            @error('cue')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Ciudad</label>
            <select name="ciudad_id" id="" class="form-control">
              @foreach ($domicilios as $ciudad)
                  <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
              @endforeach
            </select>
            @error('ciudad_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

  
        <div class="form-group">
          <label for="">Direccíon</label>
          <input type="text" class="form-control" id=""placeholder="Direccíon" required name="direccion" value="{{old('direccion',$establecimiento->direccion)}}">
          @error('direccion')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Teléfono</label>
            <input type="text" class="form-control" id=""placeholder="Teléfono" required name="telefono" value="{{old('telefono',$establecimiento->telefono)}}">
            @error('telefono')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Correo</label>
            <input type="text" class="form-control" id=""placeholder="Correo" required name="correo" value="{{old('correo',$establecimiento->correo)}}">
            @error('correo')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
  
  
          
        <div class="form-group">
            <label for="">Rector</label>
            <input type="text" class="form-control" id=""placeholder="Rector" required name="rector" value="{{old('rector',$establecimiento->rector)}}">
            @error('rector')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Vicerrector</label>
            <input type="text" class="form-control" id=""placeholder="Vicerrector" required name="vicerrector" value="{{old('vicerrector',$establecimiento->vicerrector)}}">
            @error('vicerrector')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
          
          <x-boton-actualizar/>
      </form>
</div>