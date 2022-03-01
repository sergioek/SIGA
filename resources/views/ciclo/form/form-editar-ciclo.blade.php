<div>
    <form method="POST" action="{{route('ciclo.update',$ciclo)}}">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="">Ciclo</label>
         <input type="number" required step="1" min="2015" name="ciclo" id="" class="form-control" value="{{old('ciclo',$ciclo->ciclo)}}">
          @error('ciclo')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Lema</label>
           <input type="text" required name="lema" id="" class="form-control" value="{{old('lema',$ciclo->lema)}}">
            @error('lema')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Fecha de Inicio</label>
           <input type="date" required name="inicio" id="" class="form-control" value="{{old('inicio',$ciclo->inicio)}}">
            @error('inicio')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
            </div>

            <div class="form-group">
                <label for="">Fecha de Cierre</label>
               <input type="date" required name="cierre" id="" class="form-control" value="{{old('cierre',$ciclo->cierre)}}">
                @error('cierre')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
            </div>
  
          <x-boton-actualizar/>
      </form>
</div>