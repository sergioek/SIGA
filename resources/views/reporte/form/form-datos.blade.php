<div>
    <form action="{{route('reporte.reporte')}}" method="POST" >
        @csrf
        @method('POST')

    <label for="">Reporte:</label>
    <select name="reporte" id="reporte" class="form-control" required onchange="mostrar()">
       <option value="1">PLANILLA DE DATOS DE INSCRIPTOS</option>
       <option value="2">PLANILLA DE EVALUACIÓN</option>
    </select>

    <div id="div" style="display: none;">
        <label for="">Opciones de planilla:</label>
        <select name="planilla" id="" class="form-control">
           <option value="1">COMPLETA</option>
           <option value="2">SOLO MUJERES</option>
           <option value="3">SOLO VARONES</option>
        </select>
    </div>

    <script>
        function mostrar(){
          
            var select = document.getElementById("reporte").value;
            
            if(select=='2'){
              document.getElementById('div').style.display='block';
            }else{
              document.getElementById('div').style.display='none';
            }

        }
      </script>

    <label for="">Curso:</label>
    <select name="curso" id="" class="form-control">
        @foreach ($cursos as $curso)
            <option value="{{$curso->id}}">{{$curso->curso->curso . " " . $curso->division->division . " " . $curso->carrera->nombre}}</option>
        @endforeach
    </select>

    <label for="" class="mt-4">Ciclo:</label>
    <select name="ciclo" id="" class="form-control">
        @foreach ($ciclos as $ciclo)
            <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
        @endforeach
    </select>

    <x-boton-pdf/>
    </form>
</div>