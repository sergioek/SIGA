<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'fecha',
        'pase',
        'repitente',
        'documentacion_completa',
        'observaciones',
        'ciclo_id',
        'curso_id',
        'alumno_id',
        'tutor_id',
        'parentezco_id',
        'ocupacion_id',
    ];


    //relacion con ciclo
    public function ciclo(){ 
        return $this->belongsTo(Ciclo::class);
      }

      //relacion con curso
    public function curso(){ 
        return $this->belongsTo(Curso::class);
      }


      //relacion con alumno
    public function alumno(){ 
        return $this->belongsTo(Alumno::class);
      }

      //relacion con tutor
    public function tutor(){ 
        return $this->belongsTo(Tutor::class);
      }

    //relacion con parentezco
    public function parentezco(){ 
      return $this->belongsTo(Parentezco::class);
    }

       //relacion con ocupacion
       public function ocupacion(){ 
        return $this->belongsTo(Ocupacion::class);
      }

       //relacion con asignar_divisiones
       public function asignardivision(){ 
        return $this->hasMany(AsignarDivision::class);
      }
  

}
