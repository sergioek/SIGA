<div>
    <form method="POST" action="{{route('ciclo.end',$ciclo)}}">
        @method('PUT')
        @csrf
        <p class="text-danger">Tenga en cuenta que una vez cerrado el ciclo no podrán inscribirse mas alumnos en ese año lectivo. </p>
        <div class="form-group">
          <label for="">Ciclo a cerrar</label>
        <select name="ciclo" id="" required class="form-control">
            <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option> 
          
        </select>
          @error('ciclo')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

          <x-boton-cerrar/>
      </form>
</div>