<?php

namespace App\Http\Controllers;

use PDF;
use Exception;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Ciclo;
use App\Models\Alumno;
use App\Models\Espacio;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use App\Models\CursoDivision;
use App\Models\AsignarDivision;
use App\Models\Clasificaciones;
use App\Models\Colegio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ReporteController extends Controller
{

    public function index(){
        //Buscar los datos para hacer reporte `por curso
       
        //Buscando la seccion  en cache
        if (Cache::has('cursos_divisiones')) {
            $cursos=Cache::get('cursos_divisiones');
        } else { 
            $cursos=CursoDivision::all();
            Cache::put('cursos_divisiones',$cursos,14400); 
        }

        //Buscando ciclos en cache
        if (Cache::has('ciclos')) {
            $ciclos=Cache::get('ciclos');
        } else { 
            $ciclos=Ciclo::orderBy('ciclo','DESC')->get();
            Cache::put('ciclos',$ciclos,14400); 
        }
        
        return view('reporte.reporte',compact('cursos','ciclos'));
    }

    public function reportes(Request $request){
        //Recibiendo los parametros y buscando el ciclo y el curso
        $ciclo=Ciclo::find($request->ciclo);
        $curso=CursoDivision::find($request->curso);

        //Buscando datos del establecimiento
        if (Cache::has('establecimiento')) {
            $establecimiento=Cache::get('establecimiento');
        } else {
            $establecimiento=Colegio::find(1);
            Cache::put('establecimiento',$establecimiento,14400);
        }
        
        //Generando listado de datos de alumnos
        if($request->reporte==1){
            $alumnos =DB::table('inscripcions')
            ->join('asignar_divisions', 'inscripcions.id', '=', 'asignar_divisions.inscripcion_id')->join('alumnos', 'inscripcions.alumno_id', '=', 'alumnos.id')->join('tutors','inscripcions.tutor_id','=','tutors.id')->join('parentezcos','inscripcions.parentezco_id','=','parentezcos.id')->orderBy('alumnos.sexo','ASC')
           ->orderBy('alumnos.apellidos', 'ASC')->where('asignar_divisions.ciclo_id',$request->ciclo)->where('grupo_id',$request->curso)->where('baja',null)->get();
    
          //Generando PDF
           $pdf= PDF::loadView('reporte.form.listadodatos',compact('alumnos','ciclo','curso','establecimiento'))->setPaper('A3', 'landscape')->setWarnings(false)->save('myfile.pdf');
           return $pdf->download('listado.pdf');
          
        }

        //Generando planillas de evaluacion
        if($request->reporte==2){

            //Planilla completa
            if($request->planilla==1){
                $alumnos =DB::table('inscripcions')
                ->join('asignar_divisions', 'inscripcions.id', '=', 'asignar_divisions.inscripcion_id')->join('alumnos', 'inscripcions.alumno_id', '=', 'alumnos.id')->orderBy('alumnos.sexo','ASC')
               ->orderBy('alumnos.apellidos', 'ASC')->where('asignar_divisions.ciclo_id',$request->ciclo)->where('grupo_id',$request->curso)->where('alumnos.baja','=',null)->get();

            }

            //Planilla solo mujeres
            if($request->planilla==2){
             
                $alumnos =DB::table('inscripcions')
                ->join('asignar_divisions', 'inscripcions.id', '=', 'asignar_divisions.inscripcion_id')->join('alumnos', 'inscripcions.alumno_id', '=', 'alumnos.id')->where('alumnos.sexo','!=','M')
               ->orderBy('alumnos.apellidos', 'ASC')->where('asignar_divisions.ciclo_id',$request->ciclo)->where('grupo_id',$request->curso)->where('alumnos.baja','=',null)->get();
            }


            //Planilla solo varones
            if($request->planilla==3){
             
                $alumnos =DB::table('inscripcions')
                ->join('asignar_divisions', 'inscripcions.id', '=', 'asignar_divisions.inscripcion_id')->join('alumnos', 'inscripcions.alumno_id', '=', 'alumnos.id')->where('alumnos.sexo','M')
               ->orderBy('alumnos.apellidos', 'ASC')->where('asignar_divisions.ciclo_id',$request->ciclo)->where('grupo_id',$request->curso)->where('alumnos.baja','=',null)->get();
            }

            //Descargando la planilla en PDF
           $pdf= PDF::loadView('reporte.form.planilla',compact('alumnos','ciclo','curso','establecimiento'))->setPaper('B4', 'landscape')->setWarnings(false)->save('myfile.pdf');
           return $pdf->download('planilla.pdf');

        }

      
    }


    public function alumno(){
        //Mostrando la vista para sacar reporte por alumno
        return view('reporte.reporte-alumno');
    }

    public function const(Request $request){
        //Determinando la fecha actual, para ponerla en los reportes / constncias 
        $fecha = Carbon::now()->locale('es')->isoFormat('dddd D \d\e MMMM \d\e\l Y');
        //variables de const. pase
        $materias=$request->materias;
        $idioma=$request->idioma;
        //vARIABLES TIT TRAMITE
        $espacios=$request->espacios;

        
        //Buscando datos del establecimiento
        if (Cache::has('establecimiento')) {
            $establecimiento=Cache::get('establecimiento');
        } else {
            $establecimiento=Colegio::find(1);
            Cache::put('establecimiento',$establecimiento,14400);
        }
        
        try {
            //Buscando el alumno por dni
            $alumno=Alumno::where('dni',$request->dni)->first();
            //Determinando su ultima inscripcion. para saber el curso/division actual
            $inscripcion=Inscripcion::all()->where('alumno_id',$alumno->id)->last();
            //Determinando la division actual
            $curso=AsignarDivision::all()->where('inscripcion_id',$inscripcion->id)->last();
            //Determinando el ultimo del alumnociclo
            //$ciclo=$inscripcion->ciclo;
            $ciclo=Ciclo::all()->last();

        } catch (Exception $e) {
            //Si los datos antes ingresados arrojan error en la busqueda, se muestra un msj
            return redirect()->route('reporte.alumno')->with('MsjFalla','El DNi ingresado no corresponde a un alumno inscripto para el presente ciclo lectivo.');
            
        }


            //si el alumno se encuentra inscripto pero no se le asigno un seccion, muestra el msj
            if($curso->grupo_id==null){
                return redirect()->route('reporte.alumno')->with('MsjFalla','El alumno/a se encuentra inscripto pero no se asignó una seccion. Dirigasé a "Sección" para realizar esta operación.');
            }

            //Imprime una constancia de alumno regular
            if($request->reporte==1){
                $pdf= PDF::loadView('reporte.form-alumno.alumno-regular',compact('ciclo','curso','alumno','fecha','establecimiento'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
                return $pdf->download('constanciaalumnoregular.pdf');
            }

            //Constancia de titulo en tramite
            if($request->reporte==2){

                if($curso->division->curso->curso=='6º'){
                    $pdf= PDF::loadView('reporte.form-alumno.titulo-tramite',compact('ciclo','curso','alumno','fecha','establecimiento','espacios'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
                     return $pdf->download('titulo-tramite.pdf');
                }else{
                    return redirect()->route('reporte.alumno')->with('MsjFalla','No se puede emitir constancia porque el alumno no cursó 6º año.');
                }
                
            }

            //Constancia de pase
            if($request->reporte==3){
                $pdf= PDF::loadView('reporte.form-alumno.constancia-pase',compact('ciclo','curso','alumno','fecha','establecimiento','materias','idioma'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
                return $pdf->download('constancia-pase.pdf');
            }

            //analitico parcial
            
            if($request->reporte==4){
                $calificaciones=Clasificaciones::all()->where('alumno_id',$alumno->id);

                $materias=Clasificaciones::all()->where('alumno_id',$alumno->id)->count();

                $promedio=Clasificaciones::all()->where('alumno_id',$alumno->id)->sum('cal_def');

                $pdf= PDF::loadView('reporte.form-alumno.analitico-parcial',compact('ciclo','curso','alumno','fecha','calificaciones','promedio','materias','establecimiento'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
                return $pdf->download('analitico-parcial.pdf');
            }

            //Libreta de calificaciones
            if($request->reporte==5){

                $espacios=Espacio::all()->where('curso_id',$curso->division->curso->id );

                $pdf= PDF::loadView('reporte.form-alumno.libreta',compact('ciclo','curso','alumno','fecha','inscripcion','espacios','establecimiento'))->setPaper('A4', 'landscape')->setWarnings(false)->save('myfile.pdf');
                return $pdf->download('libreta.pdf');
            }  
            
            //Libreta de calificaciones
            if($request->reporte==6){

                $pdf= PDF::loadView('reporte.form-alumno.condicion-academica',compact('alumno'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
                return $pdf->download($alumno->apellidos . ' ' . $alumno->nombres.'.pdf');
            }      

    }

    // index libro de calificaciones 
    public function libro(){
        //Buscando los datos para la vista 
        //Buscando la seccion  en cache 
        if (Cache::has('cursos_divisiones')) {
            $cursos=Cache::get('cursos_divisiones');
        } else { 
            $cursos=CursoDivision::all();
            Cache::put('cursos_divisiones',$cursos,14400); 
        }
        //Buscando ciclos en cache
        if (Cache::has('ciclos')) {
            $ciclos=Cache::get('ciclos');
        } else { 
            $ciclos=Ciclo::orderBy('ciclo','DESC')->get();
            Cache::put('ciclos',$ciclos,14400); 
        }
        

        return view('reporte.reporte-libro',compact('cursos','ciclos'));
    }

    public function clasificaciones(Request $request){
        //Validando los datos del form libro de calificaciones
        $request->validate([
            'dni'=>'required||integer',
            'folio'=>'required|integer',
            ]
        );
        //Buscando el ciclo y division 
        $ciclo=Ciclo::find($request->ciclo);
        $curso=CursoDivision::find($request->curso);

        //Buscando datos del establecimiento
        if (Cache::has('establecimiento')) {
            $establecimiento=Cache::get('establecimiento');
        } else {
            $establecimiento=Colegio::find(1);
            Cache::put('establecimiento',$establecimiento,14400);
        }
        
        //Definiendo variables, para evitar errores sino se define el alumno 2 ..
        $folio=$request->folio;
        $alumno2="";
        $matricula2="";
        $calificaciones2="";
        $promedio2="";
        $observaciones=$request->observaciones;
        $observaciones2=$request->observaciones2;

        try {
            //Buscando el alumno por dni alum 1
            $alumno=Alumno::where('dni',$request->dni)->first();
            //buscando la inscripcion de ese alumno 1 en el ciclo lectivo
            $inscripcion= Inscripcion::where('ciclo_id',$request->ciclo)->where('alumno_id',$alumno->id)->first();
            //Definiendo la matricula  alum 1
            $matricula= AsignarDivision::where('grupo_id',$curso->id)->where('inscripcion_id',$inscripcion->id)->first();
            //buscando las calificaciones alum1
            $calificaciones=Clasificaciones::all()->where('alumno_id',$alumno->id)->where('curso_id',$curso->curso->id)->where('carrera_id',$curso->carrera->id);
            $mostrarPromedio=true;
            
            foreach ($calificaciones as $calificacion) {
                if($calificacion->cal_def<6){
                    $mostrarPromedio=false;
                }

            }



            //sacando el promedio del alumno 1
            $promedio=Clasificaciones::all()->where('alumno_id',$alumno->id)->where('curso_id',$curso->curso->id)->where('carrera_id',$curso->carrera->id)->sum('cal_def');
            //sacando la cantidad de materias
            $materias=Clasificaciones::all()->where('alumno_id',$alumno->id)->where('curso_id',$curso->curso->id)->where('carrera_id',$curso->carrera->id)->count();
            

            //si el usuario eligio el formato 2, es decir dos alumnos por folio, se realiza la busqueda del alumno 2
            if($request->formato=='2'){
                //buscando alumno 2 por dni
                $alumno2=Alumno::where('dni',$request->dni2)->first();
                //buscando la inscripcion 2
                $inscripcion2= Inscripcion::where('ciclo_id',$request->ciclo)->where('alumno_id',$alumno2->id)->first();

                //buscando la matricula 
                $matricula2= AsignarDivision::where('grupo_id',$curso->id)->where('inscripcion_id',$inscripcion2->id)->first();
                
                //buscando las calificaciones 
                $calificaciones2=Clasificaciones::all()->where('alumno_id',$alumno2->id)->where('curso_id',$curso->curso->id)->where('carrera_id',$curso->carrera->id);
                $mostrarPromedio2=true;
                //sacando el promedio 
                $promedio2=Clasificaciones::all()->where('alumno_id',$alumno2->id)->where('curso_id',$curso->curso->id)->where('carrera_id',$curso->carrera->id)->sum('cal_def');

                foreach ($calificaciones2 as $calificacion) {
                    if($calificacion->cal_def<6){
                        $mostrarPromedio2=false;
                    }
    
                }
            }
            //Generando el pdf
            $pdf= PDF::loadView('reporte.form-libro.libro',compact('establecimiento','ciclo','curso','alumno','matricula','calificaciones','observaciones','mostrarPromedio','promedio','materias','alumno2','matricula2','calificaciones2','observaciones2','mostrarPromedio2','promedio2','folio'))->setPaper('B4', 'portrait')->setWarnings(false)->save('myfile.pdf');

            return $pdf->download($folio.'.pdf');

        } catch (Exception $e) {
            //Si algo falla, muestra error.
            return redirect()->route('reporte.libro')->with('MsjFalla','Verifique los datos ingresados. No se puede elaborar el folio del libro de calificaciones.'); 
        }

      
}

}

