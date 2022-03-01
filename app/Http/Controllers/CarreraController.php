<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Exception;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna a la vista para ver el listado de carreras
        return view('carrera.carreras');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna  a la vista para crear una carrera
        return view('carrera.nueva-carrera');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validaciones para guardar una carrera
        $request->validate([
            'nombre'=>'required|string|max:100|unique:carreras',
            'resolucion'=>'required|string|max:100',
            'años'=>'required|integer|max:10',
            'titulo'=>'required|string|max:100',
        ]);

        //Guardar la carrera
        $carrera=Carrera::create([
            'nombre'=>$request->nombre,
            'resolucion'=>$request->resolucion,
            'años'=>$request->años,
            'titulo'=>$request->titulo,
            'colegio_id'=>1,
        ]);

        //retorna  a la vista
        return redirect()->route('carrera.index')->with('MsjExito','Se creo una carrera exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //retorna  a la pag. anterior
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   //Busca la carrera por id
        $carrera=Carrera::find($id);

        //Si la carrera existe, retorna la vista para actualizar
        if(!empty($carrera)){
            return view('carrera.actualizar-carrera',compact('carrera'));
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
    public function update(Request $request, Carrera $carrera)
    {
        //Validaciones para actualizar la carrera
        $request->validate([
            'nombre'=>'required|string|max:100|unique:carreras,nombre,'. $carrera->id,
            'resolucion'=>'required|string|max:100',
            'años'=>'required|integer|max:10',
            'titulo'=>'required|string|max:100',
        ]);

        //Update sobre carrera
        $carrera->update([
            'nombre'=>$request->nombre,
            'resolucion'=>$request->resolucion,
            'años'=>$request->años,
            'titulo'=>$request->titulo,
            'colegio_id'=>1,
        ]);

        //retorna  a la vista carrera.index
        return redirect()->route('carrera.index')->with('MsjExito','Se actualizó una carrera exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        try {

            //Intenta borrar la carrera
            $carrera->delete();
            
            //muestra un mensaje del proceso
            return redirect()->route('carrera.index')->with('MsjExito','Se elimino una carrera exitosamente');

        } catch (Exception $e) {
            
            //Muestra un mensaje de error si fallo el delete
            return redirect()->route('carrera.index')->with('MsjFalla','No se pudo eliminar una carrera porque esta asociada a otras entidades como alumnos, ciclos, etc.');

        }
    }
}
