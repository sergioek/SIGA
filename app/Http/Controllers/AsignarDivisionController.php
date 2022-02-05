<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CursoDivision;
use App\Models\AsignarDivision;


class AsignarDivisionController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna a la vista asignar-show
        return view('asignardivisiones.asignar-show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna a la vista asignardivision
        return view('asignardivisiones.asignardivision');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Retorna  al a pag. anterior, ya que el met. store no tiene funcionalidad 
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
        //Retorna  al a pag. anterior, ya que el met.  no tiene funcionalidad 
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //Busca por id, en la tabla asignar_divisions
        $asignacion=AsignarDivision::find($id);
        //Busca el curso que corresponde a ese campo asignar_divisions, para luego ofrecer las opciones de edit para cambiar de curso
        $cursos=CursoDivision::where('curso_id',$asignacion->curso->id)->get();
        
        //si se encontro el campo en asignar_divisions, se retorna a la vista, sino retorna a la pagina anterior
        if(!empty($asignacion)){

            if($asignacion->ciclo->estado!='ACTIVO'){
                return redirect()->route('asignardivision.index')->with('MsjFalla','No se puede editar porque pertenece a un ciclo lectivo cerrado.');
            }else{
               return view('asignardivisiones.asignar-edit',compact('asignacion','cursos'));  
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
    public function update(Request $request, AsignarDivision $asignacion)
    {
        //Validaciones para cambiar de grupo_id
        $request->validate([
            'grupo_id'=>'required|integer|exists:curso_divisions,id',
            'id'=>'required|integer|exists:asignar_divisions,id',
        ]);

        //Buscar en registro en asignar_divisions
        $asignacion=AsignarDivision::find($request->id);

        //actualizar ese registro con el nuevo grupo_id asignado en edit 
        $asignacion->update([
            'grupo_id'=>$request->grupo_id,
        ]);

        //Redirecciona a la pagina
        return redirect()->route('asignardivision.index')->with('MsjExito','Se actualizó el curso y división de un alumno/a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retorna  al a pag. anterior, ya que el met.  no tiene funcionalidad 
        return back();
    }
    
}
