<div>
    <form action="{{route('reporte.const')}}" method="POST" >
        @csrf
        @method('POST')

    <label for="">Reporte:</label>
    <select name="reporte" id="reporte" class="form-control" required >
       <option value="1">CONSTANCIA DE ALUMNO REGULAR</option>
       <option value="2">CONSTANCIA DE TÍTULO EN TRÁMITE</option> <option value="3">CONSTANCIA DE PASE</option>
       <option value="4">ANALÍTICO PARCIAL</option>
       <option value="5">BOLETÍN DE CALIFICACIONES</option>
    </select>

  
    <label for="">Alumno/a:</label>
    <input type="number" name="dni" id="" required class="form-control" placeholder="Ingrese el DNI del alumno/a sin puntos ni espacios" min="0">



    <x-boton-pdf/>
    </form>
</div>