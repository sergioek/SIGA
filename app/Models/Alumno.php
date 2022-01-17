<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'apellidos',
        'nombres',
        'nacionalidad',
        'dni',
        'cuil',
        'sexo',
        'fnacimiento',
        'lnacimiento',
        'direccion',
        'legajo',
        'discapacidad',
        'tipo_discapacidad',
        'auh',
        'obrasocial',
        'domicilio_id',
        'baja',
        'fecha_baja',
        'observaciones_baja',
    ];


      //relacion con ciudades 
      public function domicilio(){ 
        return $this->belongsTo(Ciudade::class);
      }

         //relacion con inscripciones 
         public function inscripcion(){ 
          return $this->hasMany(Inscripcion::class);
        }


        public function calificacion(){

          return $this->hasMany(Clasificaciones::class,'alumno_id');
        }

        
}
