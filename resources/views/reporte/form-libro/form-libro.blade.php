<div>
    <form action="{{route('reporte.clasificaciones')}}" method="POST" >
        @csrf
        @method('POST')

    <label for="">Curso:</label>
    <select name="curso" id="" class="form-control" required>
        @foreach ($cursos as $curso)
            <option value="{{$curso->id}}">{{$curso->curso->curso . " " . $curso->division->division . " " . $curso->carrera->nombre}}</option>
        @endforeach
    </select>

    <label for="">Ciclo:</label>
    <select name="ciclo" id="" class="form-control" required>
        @foreach ($ciclos as $ciclo)
            <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
        @endforeach
    </select>

    <label for="">Formato:</label>
    <select name="formato" id="formato" class="form-control"  onchange="mostrar()">
            <option value="1">1 ALUMNO/A POR FOLIO</option>
            <option value="2">2 ALUMNOS/A POR FOLIO</option>
    </select>

  
    <label for="" class="text-danger">*Alumno/a 1:</label>
    <input type="number" name="dni" id="" required class="form-control" placeholder="Ingrese el DNI del alumno/a sin puntos ni espacios" min="0">
    @error('dni')
    <br>
        <small class="text-danger">*{{$message}}</small>
    <br>
     @enderror

    <label for="">Observaciones Alumno/a 1:</label>
    <input type="text" name="observaciones" id="" class="form-control" placeholder="Ingrese una observación">
      
    <div id="div" style="display: none;" >
        <label for="" class="text-danger">Alumno/a 2:</label>
        <input type="number" name="dni2"  class="form-control" placeholder="Ingrese el DNI del alumno/a sin puntos ni espacios" min="0">

        <label for="">Observaciones Alumno/a 2:</label>
        <input type="text" name="observaciones2" id="" class="form-control" placeholder="Ingrese una observación">
    </div>
  

    <label for="">*Folio:</label>
    <input type="number" name="folio" id="folio" required class="form-control" placeholder="Ingrese el número de folio del reporte" min="1">
    @error('folio')
    <br>
        <small class="text-danger">*{{$message}}</small>
    <br>
     @enderror

    <script>
        function mostrar(){

        var select = document.getElementById("formato").value;

        if(select=='2'){
            document.getElementById('div').style.display='block';

        }else{
            document.getElementById('div').style.display='none';

        }

        }
    </script>

    <x-boton-pdf/>
    </form>
</div>