<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciclo',
        'lema',
        'inicio',
        'cierre',
        'colegio_id',
        'estado',
    ];

       //relacion con ciudades 
       public function colegio(){ 
        return $this->belongsTo(Colegio::class);
      }
}
