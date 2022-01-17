<div>
    <form method="POST" action="{{route('inscripcion.update',$inscripcion)}}">
        @method('PUT')
        @csrf
        
        <!-----------------inscripcion----------------------->
  
        <h4 class="text-success">Inscripción:</h4>

        <div class="form-group">
            <label for="">Curso a inscribirse</label>
            <select name="curso_id" id="" class="form-control" required>
                <option selected value="{{$inscripcion->curso_id}}">{{$inscripcion->curso->curso}}</option>
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
            <select name="pase" id="" class="form-control" required>
                <option value="{{$inscripcion->pase}}" selected>{{$inscripcion->pase}}</option>
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
            <select name="repitente" id="" class="form-control" required>
                <option value="{{$inscripcion->repitente}}" selected>{{$inscripcion->repitente}}</option>
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
            <select name="documentacion_completa" id="" class="form-control" required>
                <option value="{{$inscripcion->documentacion_completa}}" selected>{{$inscripcion->documentacion_completa}}</option>
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
            <label for="">Tutor</label>
            <select name="tutor_id" id="" class="form-control">
                <option selected value="{{$inscripcion->tutor_id}}">{{$inscripcion->tutor->apellido . " " .$inscripcion->tutor->nombre }}</option>
                @foreach ($tutores as $tutor)
                    <option value="{{$tutor->id}}">{{$tutor->apellido . " ". $tutor->nombre}}</option> 
                @endforeach
            </select>
            @error('tutor_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="">Parentezco</label>
            <select name="parentezco_id" id="" class="form-control">
                <option selected value="{{$inscripcion->parentezco_id}}">{{$inscripcion->parentezco->parentezco }}</option>
                @foreach ($parentezcos as $parentezco)
                    <option  value="{{$parentezco->id}}">{{$parentezco->parentezco}}</option> 
                @endforeach
            </select>
            @error('parentezco_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Ocupación</label>
            <select name="ocupacion_id" id="" class="form-control">
                <option selected value="{{$inscripcion->ocupacion_id}}">{{$inscripcion->ocupacion->ocupacion}}</option>
                @foreach ($ocupaciones as $ocupacion)
                    <option  value="{{$ocupacion->id}}">{{$ocupacion->ocupacion}}</option> 
                @endforeach
            </select>
            @error('ocupacion_id')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="">Observaciones</label>
            <textarea name="observaciones" id="" cols="30" rows="10" class="form-control">{{$inscripcion->observaciones}}</textarea >
            @error('observaciones')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        <x-boton-actualizar/>
      </form>
</div>