<?php

namespace App\Http\Livewire;

use App\Models\Ciclo;
use Livewire\Component;
use App\Models\CursoDivision;
use App\Models\AsignarDivision;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class Dashboard extends Component
{
    //definiendo las propiedades
    public $ciclos;
    public $año;
    public $cursos;
    public $curso;

    public function mount(){
        //Buscando los ciclos ordenados desc
        if (Cache::has('ciclos')) {
            $this->ciclos=Cache::get('ciclos');
        } else { 
            $this->ciclos=Ciclo::orderBy('ciclo','DESC')->get();
            Cache::put('ciclos',$this->ciclos,14400); 
        }
        
        //buscando los cursos_divisions
        //Buscando la seccion  
        if (Cache::has('cursos_divisiones')) {
            $this->cursos=Cache::get('cursos_divisiones');
        } else { 
            $this->cursos=CursoDivision::all();
            Cache::put('cursos_divisiones',$this->cursos,14400); 
        }



    }
    public function render()
    {   
        //definiendo variables y su valor
        $ciclos=$this->ciclos;
        $cursos=$this->cursos;
        $varones=0;
        $mujeres=0;
        $seccion=[];
        $subtotal=0;

            //si se selecciona un curso y año al mismo tiempo se busca la cantidad de alumnos y demas datos 
            if(!empty($this->curso) && !empty($this->año)){

                //buscando la seccion 
                $seccion=CursoDivision::where('id',$this->curso)->get();
                //buscando la cant de varones
                $varones=DB::table('asignar_divisions')->join('inscripcions','asignar_divisions.inscripcion_id','=','inscripcions.id')->join('alumnos','inscripcions.alumno_id','=','alumnos.id')->where('asignar_divisions.ciclo_id',$this->año)->where('asignar_divisions.grupo_id',$this->curso)->where('alumnos.sexo','M')->count();
                //buscando la cant de mujeres del curso
                $mujeres=DB::table('asignar_divisions')->join('inscripcions','asignar_divisions.inscripcion_id','=','inscripcions.id')->join('alumnos','inscripcions.alumno_id','=','alumnos.id')->where('asignar_divisions.ciclo_id',$this->año)->where('asignar_divisions.grupo_id',$this->curso)->where('alumnos.sexo','!=','M')->count();
                //Sumando valores
                $subtotal=$varones+$mujeres;
            
            }

           //El total siempre se mostrara en pantalla
            //Total varones inscriptos
            $total_varones=DB::table('asignar_divisions')->join('inscripcions','asignar_divisions.inscripcion_id','=','inscripcions.id')->join('alumnos','inscripcions.alumno_id','=','alumnos.id')->where('asignar_divisions.ciclo_id',$this->año)->where('alumnos.sexo','M')->count();
            //total mujeres inscriptas
            $total_mujeres=DB::table('asignar_divisions')->join('inscripcions','asignar_divisions.inscripcion_id','=','inscripcions.id')->join('alumnos','inscripcions.alumno_id','=','alumnos.id')->where('asignar_divisions.ciclo_id',$this->año)->where('alumnos.sexo','!=','M')->count();

            //contando la cantidad de inscriptos .. (el sistema no determina si se asigno seccion)
            $total=AsignarDivision::where('ciclo_id',$this->año)->count();
        //retorna  a la vista
        return view('livewire.dashboard',compact('ciclos','cursos','seccion','varones','mujeres','subtotal','total_varones','total_mujeres','total'));
    }
}
