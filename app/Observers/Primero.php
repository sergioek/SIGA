<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

//Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
$primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);

//Si no tiene las materias de 1°, generarlas
if($primero->isEmpty()){

$espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);

foreach ($espaciosprimeros as $espacio) {    
        $calificaciones=Clasificaciones::create([
        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
        'espacio_id'=>$espacio->id,
        'carrera_id'=>1,
        'curso_id'=>1,
        ]);
        }
}

?>