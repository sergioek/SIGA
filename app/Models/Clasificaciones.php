<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'nota_1',
        'nota_2',
        'nota_fin',
        'nota_dic',
        'nota_feb',
        'nota_val',
        'cal_def',
        'examen',
        'observaciones',
	    'carrera_id',
        'espacio_id',
        'alumno_id',
        'curso_id',
        'establecimiento',
    ];


    public function espacio(){
        return $this->belongsTo(Espacio::class);
    }

    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }


    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
    

}
