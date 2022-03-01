<div>
    <form action="{{route('reporte.const')}}" method="POST" >
        @csrf
        @method('POST')

    <label for="">Reporte:</label>
    <select name="reporte" id="reporte" class="form-control" required onchange="mostrar()">
       <option value="1">CONSTANCIA DE ALUMNO REGULAR</option>
       <option value="2">CONSTANCIA DE TÍTULO EN TRÁMITE</option> <option value="3">CONSTANCIA DE PASE</option>
       <option value="4">ANALÍTICO PARCIAL</option>
       <option value="5">BOLETÍN DE CALIFICACIONES</option>
    </select>

  
    <label for="">Alumno/a:</label>
    <input type="number" name="dni" id="" required class="form-control" placeholder="Ingrese el DNI del alumno/a sin puntos ni espacios" min="0">


    <div class="form-group" id="div" style="display: none;">
        <label for="">Materias que adeuda:</label>
        <input type="text" name="materias" id="" class="form-control" placeholder="Descripción">

        <label for="">Idioma cursado:</label>
        <input type="text" name="idioma" id="" class="form-control" placeholder="Descripción">
    </div>



    <x-boton-pdf/>
    </form>

    <script>
        function mostrar(){
            let select = document.getElementById("reporte").value;
                
                if(select=='3'){
                    document.getElementById('div').style.display='block';
                }else{
                  document.getElementById('div').style.display='none';
                }

            }
    </script>
</div>