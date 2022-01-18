<div>
    <form method="POST" action="{{route('tutor.store')}}">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id=""placeholder="Apellidos en mayúsculas" required name="apellido" pattern="[A-Z-Ñ-´-Ü ]{1,50}">
          @error('apellido')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Nombres</label>
            <input type="text" class="form-control" id=""placeholder="Nombres" required name="nombre">
            @error('nombre')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">DNI</label>
            <input type="number" class="form-control" id=""placeholder="DNI" required name="tutordni">
            @error('tutordni')
              <br>
                  <small class="text-danger">*{{'El DNI debe contener 8 digitos, sin puntos ni espacios.'}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">CUIL</label>
            <input type="text" class="form-control" id=""placeholder="CUIL Ej:20-12859744-4" required name="tutorcuil">
            @error('tutorcuil')
              <br>
                  <small class="text-danger">*{{'El CUIL debe contener 13 digitos.'}}</small>
              <br>
            @enderror
     

          <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" class="form-control" id=""placeholder="Dirección" required name="tutordireccion">
            @error('tutordireccion')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Teléfono</label>
            <input type="tel" class="form-control" id=""placeholder="Teléfono sin 0 ni 15" required name="telefono">
            @error('telefono')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="tel" class="form-control" id=""placeholder="Email" required name="email">
            @error('email')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <x-boton-guardar/>
      </form>
</div>