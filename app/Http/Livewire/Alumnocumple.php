<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Alumnocumple extends Component
{
    public function render()
    {
        //Determinando la fecha actual, para ponerla en los reportes / constncias 
        $fechaHoy = Carbon::now()->format('m-d');

        $alumnos = Alumno::all();
        return view('livewire.alumnocumple',compact('alumnos','fechaHoy'));
    }
}
