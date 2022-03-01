<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'turno',
        'curso_id',
        'carrera_id',
        'horas',
    ];


    //relacion con curso
    public function curso(){ 
        return $this->belongsTo(Curso::class);
      }

      //relacion con curso
    public function carrera(){ 
        return $this->belongsTo(Carrera::class);
      }
}
