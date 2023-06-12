<style>
 @page {
    margin-left: 1cm;
    margin-right: 1cm; 
  }   

  div{
    padding-left: 40px;
  }

  table{
        margin-top: 10px;
        width: 100%;
        border-collapse: collapse;
        padding-left: 40px;
        font-size: 15px;
  }


        th{
            border: 2px solid black;
            height: 30px;
        }

        td{
            border: 1px solid black;
            height: 80px;
            text-align:center;
        }

        strong{
            text-decoration:underline;
        }
</style>

<h2 style="text-align: center">CONDICIÓN ACADÉMICA DE ALUMNOS</h2>

<div>
<p><strong>Nombres y apellidos:</strong> {{$alumno->apellidos . " " . $alumno->nombres}}</p>
<p><strong>DNI:</strong> {{$alumno->dni}}</p>
<p><strong>Fecha de Nacimiento:</strong> {{$newDate = date("d-m-Y", strtotime($alumno->fnacimiento))}}</p>
<p><strong>Lugar de Nacimiento:</strong> {{$alumno->lnacimiento}}</p>
<p><strong>Escuela de Procedencia:</strong> </p>
</div>


<table>
    <thead>
        <tr>
            <th style="width:80px;">Curso y division</th>
            <th style="width:100px;">Termino lectivo</th>
            <th style="width:180px;">Situación académica</th>
            <th>Observaciones</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>
                
            </td>
               
            <td>
                
            </td>

            <td>

            </td>

            <td>

            </td>
        </tr>


        <tr>
            <td>
                
            </td>

            <td>
                
            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>


        <tr>
            <td>
                3ºA
            </td>

            <td>
                2023
            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

        <tr>
            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

        <tr>
            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

        <tr>
            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

        <tr>
            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

        <tr>
            <td>

            </td>

            <td>

            </td>

            <td>

            </td>

            <td>
                
            </td>
        </tr>

    </tbody>
</table>