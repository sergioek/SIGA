<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignarDivision extends Model
{
    use HasFactory;

    protected $fillable = [
        'inscripcion_id',
        'curso_id',
        'grupo_id',
        'ciclo_id',
    ];

       //relacion con inscripciones
       public function inscripcion(){ 
        return $this->belongsTo(Inscripcion::class);
      }


         //relacion con curso
         public function curso(){ 
          return $this->belongsTo(Curso::class);
        }

         //relacion con curso_divisions
         public function division(){ 
            return $this->belongsTo(CursoDivision::class,'grupo_id');
          }

             //relacion con ciclo
         public function ciclo(){ 
          return $this->belongsTo(Ciclo::class);
        }
 

}
