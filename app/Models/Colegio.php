<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivel',
        'nombre',
        'direccion',
        'cue',
        'correo',
        'telefono',
        'rector',
        'vicerrector',
        'ciudad_id',
    ];

       //relacion con ciudades 
       public function ciudad(){ 
        return $this->belongsTo(Ciudade::class);
      }
}
