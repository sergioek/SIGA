<div>
    <form method="POST" action="{{route('ciclo.store')}}">
        @method('POST')
        @csrf

        <div class="form-group">
          <label for="">Ciclo</label>
         <input type="number" required step="1" min="2015" name="ciclo" id="" class="form-control" value="{{old('ciclo')}}">
          @error('ciclo')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Lema</label>
           <input type="text" required name="lema" id="" class="form-control" value="{{old('lema')}}">
            @error('lema')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Fecha de Inicio</label>
           <input type="date" required name="inicio" id="" class="form-control" value="{{old('inicio')}}">
            @error('inicio')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
            </div>

            <div class="form-group">
                <label for="">Fecha de Cierre</label>
               <input type="date" required name="cierre" id="" class="form-control" value="{{old('cierre')}}">
                @error('cierre')
                  <br>
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
            </div>


            <div class="form-group">
              <label for="">Estado</label>
              <select name="estado" id="" class="form-control">
                <option selected value="ACTIVO">ACTIVO</option>
              </select>
              @error('estado')
                <br>
                    <small class="text-danger">*{{'Existe un ciclo lectivo activo dentro de su sistema.Debe cerrar ese ciclo para poder inaugurar uno nuevo.'}}</small>
                <br>
              @enderror
          </div>

  
          <x-boton-guardar/>
      </form>
</div>