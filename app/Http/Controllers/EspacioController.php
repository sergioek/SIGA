<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Curso;
use App\Models\Espacio;
use Exception;
use Illuminate\Http\Request;

class EspacioController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //Retorna a la vista
        return view('espacio.espacio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //Busca cursos y carreras para poder crear espacios
        $cursos=Curso::all();
        $carreras=Carrera::all();
        //Retorna  a la vista
        return view('espacio.nuevo-espacio',compact('cursos','carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //realiza las validaciones 
        $request->validate([
            'nombre'=>'required|string|max:100',
            'turno'=>'required|max:100',
            'horas'=>'required|integer|min:1|max:50',
            'curso_id'=>'required|integer|exists:cursos,id',
            'carrera_id'=>'required|integer|exists:carreras,id',
        ]);

        //Crea los espacios 
        $espacio=Espacio::create($request->all());
        //retorna a  la vista
        return redirect()->route('espacio.index')->with('MsjExito','Se creo un nuevo espacio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //Retorna  a la vista anterior
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
        //Busca el espacio solicitado a editar
        $espacio=Espacio::find($id);
        //Busca cursos y carreras para editar 
        $cursos=Curso::all();
        $carreras=Carrera::all();
        //Si el espacio no esta vacio, muestra el formulario
        if(!empty($espacio)){
            return view('espacio.actualizar-espacio',compact('cursos','carreras','espacio'));
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
    public function update(Request $request, Espacio $espacio)
    {   //Validaciones para update de espacio
        $request->validate([
            'nombre'=>'required|string|max:100',
            'turno'=>'required|max:100',
            'horas'=>'required|integer|min:1|max:50',
            'curso_id'=>'required|integer|exists:cursos,id',
            'carrera_id'=>'required|integer|exists:carreras,id',
        ]);

        //Realiza el update
        $espacio->update($request->all());
        //retorna  a la vista 
        return redirect()->route('espacio.index')->with('MsjExito','Se actualizó un espacio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacio $espacio)
    {
        try {
            //Intenta eliminar y luego mostrar un msj
            $espacio->delete();
            return redirect()->route('espacio.index')->with('MsjExito','Se elimino un espacio exitosamente');

        } catch (Exception $e) {
            //Si falla el delete, retorna a una ruta y muestra un msj
            return redirect()->route('espacio.index')->with('MsjFalla','No se pudo eliminar el espacio porque esta asociada a otras entidades como alumnos, carreras, etc.');

        }
    }
}
