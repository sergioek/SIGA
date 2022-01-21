<div>
    <form method="POST" action="{{route('alumno.update',$alumno)}}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Legajo Nº</label>
            <input type="number" class="form-control" id=""placeholder="Legajo" required name="legajo" value="{{$alumno->legajo}}" min="1">
            @error('legajo')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id=""placeholder="Apellidos en mayúsculas" required name="apellidos" value="{{$alumno->apellidos}}" pattern="[A-Z-Ñ-Á-É-Ó-Í-Ú-Ü-Ö ]{1,50}">
          @error('apellidos')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Nombres</label>
            <input type="text" class="form-control" id=""placeholder="Nombres" required name="nombres" value="{{$alumno->nombres}}">
            @error('nombres')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Nacionalidad</label>
            <select name="nacionalidad" id="" required class="form-control">
                <option selected value="{{$alumno->nacionalidad}}">{{$alumno->nacionalidad}}</option>
                <option value="ARG">ARGENTINO</option>
                <option value="BRA">BRASILEÑO</option>
                <option value="CHIL">CHILENO</option>
                <option value="COL">COLOMBIANO</option>
                <option value="PER">PERUANO</option>
                <option value="URU">URUGUAYO</option>
                <option value="VEN">VENEZOLANO</option>
                <option value="OTRA">OTRA</option>
            </select>
            @error('nacionalidad')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">DNI</label>
            <input type="number" class="form-control" id=""placeholder="DNI" required name="dni" value="{{$alumno->dni}}">
            @error('dni')
              <br>
                  <small class="text-danger">*{{'El DNI debe ser un valor único en su base de datos. Su longuitud debe ser de 8 digitos, sin puntos ni espacios.'}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">CUIL</label>
            <input type="text" class="form-control" id=""placeholder="CUIL Ej:20-12859744-4" required name="cuil" value="{{$alumno->cuil}}">
            @error('cuil')
              <br>
                  <small class="text-danger">*{{'El CUIL debe ser un valor único en su base de datos. Debe contener 13 digitos.'}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Sexo</label>
            <select name="sexo" id="" class="form-control" required>
                <option selected value="{{$alumno->sexo}}">{{$alumno->sexo}}</option>
                <option value="M">M</option>
                <option value="F">F</option>
                <option value="OTRO">OTRO</option>
            </select>
            @error('sexo')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id=""placeholder="Fecha de Nacimiento" required name="fnacimiento" value="{{$alumno->fnacimiento}}">
            @error('fnacimiento')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id=""placeholder="Lugar de Nacimiento" required name="lnacimiento" value="{{$alumno->lnacimiento}}">
            @error('lnacimiento')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Domicilio</label>
            <select name="domicilio_id" id="" class="form-control">
                <option selected value="{{$alumno->domicilio->id}}">{{$alumno->domicilio->nombre}}</option>
                @foreach ($domicilios as $domicilio)
                    <option value="{{$domicilio->id}}">{{$domicilio->nombre}}</option>
                @endforeach
            </select>
            @error('domicilio_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" class="form-control" id=""placeholder="Dirección" required name="direccion" value="{{$alumno->direccion}}">
            @error('direccion')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Discapacidad</label>
            <select name="discapacidad" id="discapacidad" class="form-control" required onchange="mostrar()">
                <option selected value="{{$alumno->discapacidad}}">{{$alumno->discapacidad}}</option>
                <option selected value="NO">NO</option>
                <option selected value="SI">SI</option> 
            </select>
            @error('discapacidad')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group" id="div">
            <label for="">Tipo de discapacidad</label>
            <select name="tipo_discapacidad" id=""  class="form-control">
                <option></option>
                <option selected value="{{$alumno->tipo_discapacidad}}">{{$alumno->tipo_discapacidad}}</option>
                <option value="Física">Física</option>
                <option value="Sensorial">Sensorial</option>
                <option value="Intelectual">Intelectual</option>
                <option value="Psíquica">Psíquica</option>
                <option value="Visceral">Visceral</option>
                <option value="Múltiple">Múltiple</option>
            </select>
            @error('tipo_discapacidad')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        <script>
          function mostrar(){
              
            var select = document.getElementById("discapacidad").value;
            
            if(select=='SI'){
              document.getElementById('div').style.display='block';
            }else{
              document.getElementById('div').style.display='none';
            }

        }
      </script>


          
          <div class="form-group">
            <label for="">¿AUH?</label>
            <select name="auh" id="" class="form-control">
                <option selected value="{{$alumno->auh}}">{{$alumno->auh}}</option>
                <option selected value="NO">NO</option>
                <option selected value="SI">SI</option> 
            </select>
            @error('auh')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          
          <div class="form-group">
            <label for="">¿Obra social?</label>
            <select name="obrasocial" id="" class="form-control">
                <option selected value="{{$alumno->obrasocial}}">{{$alumno->obrasocial}}</option>
                <option selected value="NO">NO</option>
                <option selected value="SI">SI</option> 
            </select>
            @error('obrasocial')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <x-boton-actualizar/>
      </form>
</div>