<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoDivision extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'division_id',
        'carrera_id',
        'preceptor',
    ];

       //relacion con curso
       public function curso(){ 
        return $this->belongsTo(Curso::class);
      }


      //relacion con division
      public function division(){ 
        return $this->belongsTo(Division::class);
      }


      //relacion con carrera
      public function carrera(){ 
        return $this->belongsTo(Carrera::class);
      }
}
