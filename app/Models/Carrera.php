<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'resolucion',
        'años',
        'titulo',
        'colegio_id',
    ];


       //relacion con colegios
       public function colegio(){ 
        return $this->belongsTo(Colegio::class);
      }
}
