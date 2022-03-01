<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

//Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
$tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);

//Si no tiene las materias de 3° en esa carrera, generarlas
if($tercero->isEmpty()){

    $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);

    foreach ($espaciostercero as $espacio) {    
        $calificaciones=Clasificaciones::create([
        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
        'espacio_id'=>$espacio->id,
        'carrera_id'=>$carrera,
        'curso_id'=>3,
        ]);
    }
}


?>