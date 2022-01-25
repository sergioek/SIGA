<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalificacionesValidate;
use App\Models\Alumno;
use App\Models\Clasificaciones;
use Symfony\Component\HttpFoundation\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna a la vista calificacion
        return view('calificacion.calificacion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna a la vista ant. ya que el metodo no tiene funcionalidad 
        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //Retorna a la vista ant. ya que el metodo no tiene funcionalidad 
           return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Busca un alumno por su id 
        $alumno=Alumno::find($id);

        //si el alumno no esta vacio, se ofrece las calificaciones del mismo
        if(!empty($alumno)){
        
        //Buscando las calificaciones del alumno dentro de la tabla 
        $calificaciones=Clasificaciones::where('alumno_id',$alumno->id)->Paginate(12); 

        //retorna a la vista para cargar las notas de examen
         return view('calificacion.calificaciones-edit-examen',compact('calificaciones','alumno'));

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
        //Busca un alumno por id
        $alumno=Alumno::find($id);

        //Sino esta vacio, retorna la vista
        if(!empty($alumno)){
        
        //Busca las calificaciones de ese alumno
        $calificaciones=Clasificaciones::where('alumno_id',$alumno->id)->Paginate(1); 
        
        //retorna la vista de calificaciones de alumn regular 
         return view('calificacion.calificacion-edit',compact('calificaciones','alumno'));

        }else{
            return back();
        }
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CalificacionesValidate $request,  $calificacion)
    {
      //Busca el registro de calificacion
      $calificacion=Clasificaciones::find($calificacion);

      //Si la calificacion no esta vacia
        if(!empty($calificacion)){
            //Realiza el update
             $calificacion->update($request->all());
             //Retorna a la vista
             return redirect()->back()->with('MsjExito','Se cargo una nota.');
        }else{
            return back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            //Retorna a la vista ant. ya que el metodo no tiene funcionalidad 
            return back();
    }

    
}
