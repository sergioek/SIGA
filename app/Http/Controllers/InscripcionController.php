<?php

namespace App\Http\Controllers;


use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Tutor;
use App\Models\Alumno;
use App\Models\Ciudade;
use App\Models\Colegio;
use App\Models\Ocupacion;
use App\Models\Parentezco;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;


class InscripcionController extends Controller
{
 
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //retorna una vista con los inscriptos
        return view('inscripcion.inscripcion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //Busca en cache domilicios, sino lo crea
        if (Cache::has('domicilios')) {
            $domicilios=Cache::get('domicilios');
        } else {
           $domicilios=Ciudade::all();
            Cache::put('domicilios',$domicilios,14400); 
        }

        //Busca en cache ocupaciones, sino lo crea
        if (Cache::has('ocupaciones')) {
            $ocupaciones=Cache::get('ocupaciones');
        } else { 
           $ocupaciones=Ocupacion::all(); 
            Cache::put('ocupaciones',$ocupaciones,14400); 
        }

        //Busca en cache parentezcos, sino lo crea
        if (Cache::has('parentezcos')) {
            $parentezcos=Cache::get('parentezcos');
        } else { 
           $parentezcos=Parentezco::all(); 
            Cache::put('parentezcos',$parentezcos,14400); 
        }
     
         //Buscando cache cursos
         if (Cache::has('cursos')) {
            $cursos=Cache::get('cursos');
        } else { 
            $cursos=Curso::all();
            Cache::put('cursos',$cursos,14400); 
        }

         //buscando el ciclo activo en cache
         if (Cache::has('ciclo_activo')) {
            $ciclo=Cache::get('ciclo_activo');
        } else { 
            $ciclo=Ciclo::all()->where('estado','ACTIVO')->last();
            Cache::put('ciclo_activo',$ciclo,14400); 
        }

        //Retorna a la vista para inscripcion
        return view('inscripcion.nueva-inscripcion',compact('cursos','ocupaciones','domicilios','parentezcos','ciclo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //VAlidacion alumno
        $request->validate([
            'legajo'=>'required|integer|min:1|unique:alumnos',
            'apellidos'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'nacionalidad'=>'required|string|max:5',
            'dni'=>'required|integer|digits_between:8,9|unique:alumnos',
            'cuil'=>'required|min:13|max:14|unique:alumnos',
            'sexo'=>'required|string|max:5',
            'fnacimiento'=>'required|date',
            'lnacimiento'=>'required|string|max:50',
            'domicilio_id'=>'required|exists:ciudades,id',
            'direccion'=>'required|string|max:50',
            'discapacidad'=>'required|string|max:2',
            'auh'=>'required|string|max:2',
            'obrasocial'=>'required|string|max:2',

            /// Validacion tutor
            'apellido'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'tutordni'=>'required|integer|digits_between:8,9|unique:tutors',
            'tutorcuil'=>'required|min:13|max:14|unique:tutors',
            'tutordireccion'=>'required|string|max:50',
            'telefono'=>'required',
           

            // validacion inscripcion
            'parentezco_id'=>'required|exists:parentezcos,id',
            'ocupacion_id'=>'required|exists:ocupacions,id',
            'ciclo_id'=>'required|exists:ciclos,id',
            'curso_id'=>'required|exists:cursos,id',
            'pase'=>'required|string|max:2',
            'repitente'=>'required|string|max:2',
            'documentacion_completa'=>'required|string|max:2',    
    ]);
        //Crea los registros en alumno, tutor e inscripcion
        $alumno=Alumno::create([
            'legajo'=>$request->legajo,
            'apellidos'=>$request->apellidos,
            'nombres'=>$request->nombres,
            'nacionalidad'=>$request->nacionalidad,
            'dni'=>$request->dni,
            'cuil'=>$request->cuil,
            'sexo'=>$request->sexo,
            'fnacimiento'=>$request->fnacimiento,
            'lnacimiento'=>$request->lnacimiento,
            'domicilio_id'=>$request->domicilio_id,
            'direccion'=>$request->direccion,
            'discapacidad'=>$request->discapacidad,
            'tipo_discapacidad'=>$request->tipo_discapacidad,
            'auh'=>$request->auh,
            'obrasocial'=>$request->obrasocial,
         ]);


       $tutor=Tutor::create([
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre,
            'tutordni'=>$request->tutordni,
            'tutorcuil'=>$request->tutorcuil,
            'tutordireccion'=>$request->tutordireccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
         ]);



       $inscripcion=Inscripcion::create([
            'alumno_id'=>$alumno->id,
            'tutor_id'=>$tutor->id,
            'parentezco_id'=>$request->parentezco_id,
            'ocupacion_id'=>$request->ocupacion_id,
            'ciclo_id'=>$request->ciclo_id,
            'curso_id'=>$request->curso_id,
            'pase'=>$request->pase,
            'repitente'=>$request->repitente,
            'documentacion_completa'=>$request->documentacion_completa,
            'observaciones'=>$request->observaciones,
         ]);

        //Create en tabla asignar division se maneja con el observer InscripcionObserver


         //Eliminando cache, porque al inscribir por primera vez se crean mas alumnos y tutores. 
        Cache::forget('alumnos');
        Cache::forget('tutores');

        //Retorna a la vista 
         return redirect()->route('inscripcion.create')->with('MsjExito','Se generó una nueva inscripción.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //Busca el alumno que se quiere editar en la inscripcion
         $alumno=Alumno::find($id);

         //Si el alumno no esta vacio, es decir existe, se procesde a buscar sus inscripciones 
        if(!empty($alumno)){
            //Busca sus inscripciones ordenadas por ciclo 
            $inscriptos=Inscripcion::where('alumno_id',$id)->orderBy('ciclo_id','desc')->Paginate(10);
            
            //Retorna a la vista
            return view('inscripcion.alumno-inscripcion',compact('inscriptos','alumno'));
        }else{
            return back();
        }
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        //recibiendo la propiedad id para pasarsela al componente livewire. Buscando la inscripcion
        $inscripcionID=Inscripcion::find($id);
        
     
        //Si la inscripcion existe, se pasan los datos a la vista y de la vista al componente inscripcion-edit
        if(!empty($inscripcionID)){

            if($inscripcionID->ciclo->estado!='ACTIVO'){
                return redirect()->route('inscripcion.index')->with('MsjFalla','No se puede editar una inscripción de un ciclo lectivo cerrado.');
            }else{
                 return view('inscripcion.actualizar-inscripcion',compact('inscripcionID')); 
            }
          
        }else{
            return back();
        }
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //realizando las validaciones correspondientes
        $request->validate([
            //inscripcion
            'parentezco_id'=>'required|exists:parentezcos,id',
            'ocupacion_id'=>'required|exists:ocupacions,id',
            'curso_id'=>'required|exists:cursos,id',
            'pase'=>'required|string|max:2',
            'repitente'=>'required|string|max:2',
            'documentacion_completa'=>'required|string|max:2',
            'tutor_id'=>'required|exists:tutors,id',   
        ]);

        //Realizando la actualziacion
        $inscripcion->update($request->all());

        //Update en tabla asignar division se maneja con el observer InscripcionObserver

        //redirige a la vista 
        return redirect()->route('inscripcion.alumno')->with('MsjExito','Se actualizó una inscripción.Vaya a asignar secciones a inscriptos para asignarle una nueva sección.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //vuelve a la pag anterior
        return back();
    }


    public function alumno(){
        //Retorna una vista
        return view('inscripcion.inscripcion-alumno');
    }

    public function existing(){
        //retorna a la vista reinscripcion
        return view('inscripcion.reinscripcion');
    }

    public function enrollment(Request $request){
        //Validacion de reinscripcion
        $request->validate([
            //inscripcion
            'parentezco_id'=>'required|exists:parentezcos,id',
            'ocupacion_id'=>'required|exists:ocupacions,id',
            'curso_id'=>'required|exists:cursos,id',
            'ciclo_id'=>'required|exists:ciclos,id',
            'pase'=>'required|string|max:2',
            'repitente'=>'required|string|max:2',
            'documentacion_completa'=>'required|string|max:2',
            'tutor_id'=>'required|exists:tutors,id',
            'alumno_id'=>'required|exists:alumnos,id',
               
        ]);
        
        //Comporbamos si existe una inscripcion previa del alumno en el ciclo lectivo seleccionado
        $consulta=Inscripcion::all()->where('ciclo_id',$request->ciclo_id)->where('alumno_id',$request->alumno_id);

        //Si no existe inscripcion, se inscribe
        if($consulta->isEmpty()){
            $inscripcion=Inscripcion::create($request->all());

        //Create en tabla asignar division se maneja con el observer InscripcionObserver
        
        return redirect()->route('inscripcion.existing')->with('MsjExito','Se realizó una reinscripción.');

        }else{
            //Si esta inscripto, se devuelve un error
            return redirect()->route('inscripcion.index')->with('MsjFalla','Ya existe una inscripción para este alumno/a en el ciclo lectivo seleccionado.');
        }
    }

    //Imprimir datos de la inscripcion en pdf
    public function print($id){
        //Si el id es valido, la inscripcion no estara vacio y se genera el pdf
         $inscripcion=Inscripcion::find($id);
         if(!empty($inscripcion)){
             //Buscando datos del establecimiento
             
         if (Cache::has('establecimiento')) {
             $establecimiento=Cache::get('establecimiento');
         } else {
             $establecimiento=Colegio::find(1);
             Cache::put('establecimiento',$establecimiento,14400);
         }

        $ciclo=$inscripcion->ciclo;

         $pdf= PDF::loadView('inscripcion.ficha.ficha-inscripcion',compact('inscripcion','establecimiento','ciclo'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
         return $pdf->stream('fichaalumno.pdf');
     }else{
         return back();
     }
    }
}
