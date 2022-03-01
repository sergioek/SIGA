<div>
    
    <form method="POST" action="{{route('inscripcion.enrollment')}}">
        @method('POST')
        @csrf
        
        <!-----------------inscripcion----------------------->
  
        <h4 class="text-success">Reinscripción:</h4>

        <div class="form-group">
            <label for="">Ciclo</label>
            <select name="ciclo_id" id="" class="form-control" required>
                     <option value="{{$ciclos->id}}">{{$ciclos->ciclo}}</option>
            </select>
            @error('ciclo_id')
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        <div class="form-group">
            <label for="">Curso a inscribirse</label>
            <select name="curso_id" id="" class="form-control" required>
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
            <label for="">DNI Alumno/a</label>
            <input type="text" placeholder="Ingrese el DNI del alumno/a para buscarlo" id="" class="form-control" wire:model.debounce.1500ms="dni" >
            <br>
            <select name="alumno_id" id="" class="form-control text-danger" required >
                @forelse ($alumnos as $alumno)
                     <option>{{$alumno->apellidos . " ".$alumno->nombres}}</option>
                     <input type="hidden" name="alumno_id" value="{{$alumno->id}}">
                     @empty
                     <option>NO SE ENCONTRO UN ALUMNO/A</option>
                @endforelse
            </select>
            @error('alumno_id')
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>

        <div class="form-group">
            <label for="">¿Tiene pase de otra institución?</label>
            <select name="pase" id="" class="form-control" required>
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
            <label for="">DNI Tutor/a</label>
            <input type="text" placeholder="Ingrese el DNI del tutor/a para buscarlo" id="" class="form-control" wire:model.debounce.1500ms="tutordni" required>
            <br>
            <select name="tutor_id" id="" class="form-control text-danger" required>
                @forelse ($tutores as $tutor)
                     <option >{{$tutor->apellido . " ".$tutor->nombre}}</option>
                     <input type="hidden" name="tutor_id" value="{{$tutor->id}}">
                     @empty
                     <option>NO SE ENCONTRO UN TUTOR/A</option> 
                @endforelse
            </select>
            @error('tutor_id')
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
       
          <div class="form-group">
            <label for="">Parentezco</label>
            <select name="parentezco_id" id="" class="form-control" required>
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
            <select name="ocupacion_id" id="" class="form-control" required>
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
