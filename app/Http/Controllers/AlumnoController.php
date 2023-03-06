<?php

namespace App\Http\Controllers;

use PDF;
use Exception;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Ciclo;
use App\Models\Alumno;
use App\Models\Ciudade;
use App\Models\Colegio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AlumnoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Iniciar el index que carga un livewire para ver todos los alumnos
    public function index()
    {

        return view('alumno.alumno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Buscar en cache domicilios, sino crearlo. Luego retonar la vista para crear un alumno (alumno.create)
        if (Cache::has('domicilios')) {
            $domicilios=Cache::get('domicilios');
        } else {
           $domicilios=Ciudade::all();
            Cache::put('domicilios',$domicilios,14400); 
        }
        
        //Buscando el ultimo legajo
        $Ultimoalumno= Alumno::all()->last();
        $legajo= $Ultimoalumno->legajo +1;
        return view('alumno.nuevo-alumno',compact('domicilios','legajo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validaciones de un nuevo alumno (alumno.store)
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
        ]);

        
        //Guardar un nuevo alumno
        $alumno=Alumno::create($request->all());

        //Eliminando cache, al crear alumno. 
        Cache::forget('alumnos');

        //Retonar al index
        return redirect()->route('alumno.index')->with('MsjExito','Se agregó un nuevo alumno/a');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Buscar un alumno por id. 
        $alumno=Alumno::find($id);
        //Si el id es valido, el alumno no estara vacio y se retorna una vista
        if(!empty($alumno)){
         
            return view('alumno.baja-alumno',compact('alumno'));
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
        //Buscando en cache domicilios, sino crearlo
        if (Cache::has('domicilios')) {
            $domicilios=Cache::get('domicilios');
        } else {
           $domicilios=Ciudade::all();
            Cache::put('domicilios',$domicilios,14400); 
        }

        //Si el id es valido, el alumno no estara vacio y se retorna una vista
        $alumno=Alumno::find($id);
        if(!empty($alumno)){
            return view('alumno.actualizar-alumno',compact('alumno','domicilios'));
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
    public function update(Request $request, Alumno $alumno)
    {
        //Validaciones para actualizar alumno
        $request->validate([
            'legajo'=>'required|integer|min:1|unique:alumnos,legajo,'.$alumno->id,
            'apellidos'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'nacionalidad'=>'required|string|max:5',
            'dni'=>'required|integer|digits_between:8,9|unique:alumnos,dni,'.$alumno->id,
            'cuil'=>'required|min:13|max:14|unique:alumnos,cuil,'.$alumno->id,
            'sexo'=>'required|string|max:5',
            'fnacimiento'=>'required|date',
            'lnacimiento'=>'required|string|max:50',
            'domicilio_id'=>'required|exists:ciudades,id',
            'direccion'=>'required|string|max:50',
            'discapacidad'=>'required|string|max:2',
            'auh'=>'required|string|max:2',
            'obrasocial'=>'required|string|max:2',
    ]);

    //Realiza el update
    $alumno->update($request->all());

    //Eliminando cache, al actualizar alumno. 
    Cache::forget('alumnos');

    return redirect()->route('alumno.index')->with('MsjExito','Se actualizó un alumno/a');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        
        try {
            //Intenta eliminar el alumno y devuelve un msj
            $alumno->delete();
            //Eliminando cache, al eliminar alumno. 
            Cache::forget('alumnos');

            return redirect()->route('alumno.index')->with('MsjExito','Se elimino un alumno/a exitosamente.');

        } catch (Exception $e) {
            
            //Si la operacion delete falla, emite un mensaje 
            return redirect()->route('alumno.index')->with('MsjFalla','No se pudo eliminar el alumno/a porque esta asociada a otras entidades como inscripciones o notas.');

        }

    }


    public function down(Request $request, Alumno $alumno){
       
        //Validaciones para dar de baja 
        $request->validate([
            'baja'=>'required|string|max:25',
            'fecha_baja'=>'required|date',
        ]);

        //Actualizar los campos baja del alumno
        $alumno->update([
            'baja'=>$request->baja,
            'fecha_baja'=>$request->fecha_baja,
            'observaciones_baja'=>$request->observaciones_baja,
        ]);

        //Redireccionar a la ruta
        return redirect()->route('alumno.index')->with('MsjExito','Se realizó la baja a un alumno/a');

    }

    public function up(Alumno $alumno){
        
        //Realizar el alta de un alumno que esta de baja
        $alumno->update([
            'baja'=>null,
            'fecha_baja'=>null,
            'observaciones_baja'=>null,
        ]);

        //retonar a la vista
        return redirect()->route('alumno.index')->with('MsjExito','Se dió de alta a un alumno/a');
    }

    //Imprimir datos alumno
    public function print($id){
        //Si el id es valido, el alumno no estara vacio y se retorna una vista
            $alumno=Alumno::find($id);
            if(!empty($alumno)){
                //Buscando datos del establecimiento
            if (Cache::has('establecimiento')) {
                $establecimiento=Cache::get('establecimiento');
            } else {
                $establecimiento=Colegio::find(1);
                Cache::put('establecimiento',$establecimiento,14400);
            }

           $ciclo=Ciclo::all()->where('estado','ACTIVO')->last();

            $pdf= PDF::loadView('alumno.ficha.ficha-alumno',compact('alumno','establecimiento','ciclo'))->setPaper('A4', 'portrait')->setWarnings(false)->save('myfile.pdf');
            return $pdf->stream('fichaalumno.pdf');
        }else{
            return back();
        }
    }

}
