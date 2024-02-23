<div>
    <form method="POST" action="{{route('inscripcion.store')}}">
        @method('POST')
        @csrf
        
          <!-----------------alumno----------------------->
        <h4 class="text-success">Datos del alumno:</h4>
        <div class="form-group">
            <label for="">Legajo Nº</label>
            
            <!--<input type="number" class="form-control" id=""placeholder="Legajo" required name="legajo" min="1" value="{{$legajo}}">-->
            <select name="legajo" class="form-control">
              <option value="{{$legajo}}">{{$legajo}}</option>
            </select>
            @error('legajo')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id="apellidos"placeholder="Apellidos en mayúsculas" required name="apellidos"  value="{{old('apellidos')}}"  >
          @error('apellidos')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Nombres</label>
            <input type="text" class="form-control" id="nombres" placeholder="Nombres" required name="nombres" value="{{old('nombres')}}">
            @error('nombres')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Nacionalidad</label>
            <select name="nacionalidad" id="" required class="form-control">
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
            <input type="number" class="form-control" id=""placeholder="DNI" required min="0" name="dni" value="{{old('dni')}}">
            @error('dni')
              <br>
                  <small class="text-danger">*{{'El DNI debe ser un valor único en su base de datos. Su longuitud debe ser de 8 digitos, sin puntos ni espacios.'}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">CUIL</label>
            <input type="text" class="form-control" id=""placeholder="CUIL Ej:20-12859744-4" required name="cuil" value="{{old('cuil')}}">
            @error('cuil')
              <br>
                  <small class="text-danger">*{{'El CUIL debe ser un valor único en su base de datos. Debe contener 13 digitos.'}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Sexo</label>
            <select name="sexo" id="" class="form-control" required>
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
            <input type="date" class="form-control" id=""placeholder="Fecha de Nacimiento" required name="fnacimiento" value="{{old('fnacimiento')}}">
            @error('fnacimiento')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="nacimiento"placeholder="Lugar de Nacimiento" required name="lnacimiento" value="{{old('lnacimiento')}}">
            @error('lnacimiento')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Domicilio</label>
            <select name="domicilio_id" id="" class="form-control">
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
            <input type="text" class="form-control" id=""placeholder="Dirección" required name="direccion" value="{{old('direccion')}}">
            @error('direccion')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          
          <div class="form-group">
            <label for="">Discapacidad</label>
            <select name="discapacidad" id="discapacidad" required class="form-control" onchange="mostrar()">
                <option value="NO">NO</option>
                <option value="SI" >SI</option>
            </select>
            @error('discapacidad')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
          
       
          <div class="form-group" id="div" style="display: none;">
            <label for="">Tipo Discapacidad</label>
            <select name="tipo_discapacidad" id="tipo_discapacidad" class="form-control">
                <option value="{{null}}">Ninguna</option>
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
          
          <div class="form-group">
            <label for="">¿AUH?</label>
            <select name="auh" id="" class="form-control">
                <option  value="NO">NO</option>
                <option  value="SI">SI</option> 
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
                <option  value="NO">NO</option>
                <option  value="SI">SI</option> 
            </select>
            @error('obrasocial')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <!-----------------tutor----------------------->
          <h4 class="text-success">Datos del tutor:</h4>
          
        <div class="form-group">
            <label for="">Parentezco con el alumno</label>
            <select name="parentezco_id" id="" class="form-control">
                @foreach ($parentezcos as $parentezco)
                    <option  value="{{$parentezco->id}}">{{$parentezco->parentezco}}</option>
                @endforeach
            </select>
            @error('parentezco_id')
              ciclo_id
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

                


          <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" id="apellidosTutor"placeholder="Apellidos del tutor en mayúscula" required name="apellido" pattern="[A-Z-Ñ-Á-É-Ó-Í-Ú-Ü-Ö ]{1,50}" value="{{old('apellido')}}">
            @error('apellido')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
  
          <div class="form-group">
              <label for="">Nombres</label>
              <input type="text" class="form-control" id="nombresTutor" placeholder="Nombres del tutor" required name="nombre" value="{{old('nombre')}}" >
              @error('nombre')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
            </div>
  
            <div class="form-group">
              <label for="">DNI</label>
              <input type="number" class="form-control" id=""placeholder="DNI del tutor" required min="0" name="tutordni" value="{{old('tutordni')}}">
              @error('tutordni')
                <br>
                    <small class="text-danger">*{{'El DNI debe ser un valor único en su base de datos. Su longuitud debe ser de 8 digitos, sin puntos ni espacios.'}}</small>
                <br>
              @enderror
            </div>
  
            <div class="form-group">
              <label for="">CUIL</label>
              <input type="text" class="form-control" id=""placeholder="CUIL tutor Ej:20-12859744-4" required name="tutorcuil" value="{{old('tutorcuil')}}">
              @error('tutorcuil')
                <br>
                    <small class="text-danger">*{{'El CUIL debe ser un valor único en su base de datos. Debe contener 13 digitos.'}}</small>
                <br>
              @enderror
            </div>
  
           
          
            <div class="form-group">
              <label for="">Dirección</label>
              <input type="text" class="form-control" id=""placeholder="Dirección del tutor" required name="tutordireccion" value="{{old('tutordireccion')}}">
              @error('tutordireccion')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
            </div>

            <div class="form-group">
                <label for="">Ocupación</label>
                <select name="ocupacion_id" id="" class="form-control">
                    @foreach ($ocupaciones as $ocupacion)
                        <option value="{{$ocupacion->id}}">{{$ocupacion->ocupacion}}</option>
                    @endforeach
                </select>
                @error('ocupacion_id')
                  ciclo_id
                      <small class="text-danger">*{{$message}}</small>
                  <br>
                @enderror
              </div>
  
            <div class="form-group">
              <label for="">Teléfono</label>
              <input type="tel" class="form-control" id=""placeholder="Teléfono sin 0 ni 15" required name="telefono" value="{{old('telefono')}}">
              @error('telefono')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
            </div>
  
            <div class="form-group">
              <label for="">Email</label>
              <input type="tel" class="form-control" id=""placeholder="Email" name="email" value="{{old('email')}}">
              @error('email')
                <br>
                    <small class="text-danger">*{{$message}}</small>
                <br>
              @enderror
            </div>


        <!-----------------inscripcion----------------------->
  
     

        <h4 class="text-success">Inscripción:</h4>

        <div class="form-group">
          <label for="">Ciclo</label>
          <select name="ciclo_id" id="" class="form-control">
          <option  value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
          </select>
          @error('ciclo_id')
            ciclo_id
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>


          
        <div class="form-group">
            <label for="">Curso a inscribirse</label>
            <select name="curso_id" id="" class="form-control">
                @foreach ($cursos as $curso)
                     <option value="{{$curso->id}}">{{$curso->curso}}</option>
                @endforeach
            </select>
            @error('curso_id')
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


        <div class="form-group">
            <label for="">¿Tiene pase de otra institución?</label>
            <select name="pase" id="" class="form-control">
                <option value="NO">NO</option>
                <option  value="SI">SI</option> 
            </select>
            @error('pase')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">¿Repitente?</label>
            <select name="repitente" id="" class="form-control">
                <option value="NO">NO</option>
                <option value="SI">SI</option> 
            </select>
            @error('repitente')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">¿Documentación completa?</label>
            <select name="documentacion_completa" id="" class="form-control">
                <option selected value="NO">NO</option>
                <option selected value="SI">SI</option> 
            </select>
            @error('documentacion_completa')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Observaciones</label>
            <textarea name="observaciones" id="" cols="30" rows="10" class="form-control"></textarea >
            @error('observaciones')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
    
        <x-boton-inscribir/>
      </form>
</div>