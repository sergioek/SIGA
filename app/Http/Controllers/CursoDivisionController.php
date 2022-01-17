<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Curso;
use App\Models\Carrera;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Models\CursoDivision;
use Illuminate\Support\Facades\Cache;

class CursoDivisionController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //Retorna  a la vista para ver los datos de curso_divisions
        return view('curso.curso');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Busca los datos para crear un nuevo curso_divisions
        $carreras=Carrera::all();
        $divisiones=Division::all();
        $cursos=Curso::all();
        //retorna  a la vista con el formulario
        return view('curso.nuevo-curso',compact('cursos','divisiones','carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Valida los datos ingresados en el formulario
        $request->validate([
            'curso_id'=>'required|integer',
            'division_id'=>'required|integer|exists:divisions,id',
            'carrera_id'=>'required|integer|exists:carreras,id',
            'preceptor'=>'required|string|max:100',
        ]);
        //Crea el curso_divisions
        $curso=CursoDivision::create($request->all());

        //Elimina cache 
        Cache::forget('cursos_divisiones');
        //Redirige a curso.index
        return redirect()->route('curso.index')->with('MsjExito','Se creo un nuevo curso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //retorna a la pag anterior
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
        //Busca el curso_divisions para editar
        $Curso=CursoDivision::find($id);

        //Busca los datos para editar
        $carreras=Carrera::all();
        $divisiones=Division::all();
        $cursos=Curso::all();

        //Si el curso_divisions existe, muestra el formulario. de lo contrario vuelve a la pag anterior
        if(!empty($Curso)){
               return view('curso.actualizar-curso',compact('Curso','cursos','divisiones','carreras'));
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
    public function update(Request $request, CursoDivision $Curso)
    {   
        //Validaciones para actualizar el curso_divisions
        $request->validate([
            'curso_id'=>'required|integer',
            'division_id'=>'required|integer|exists:divisions,id',
            'carrera_id'=>'required|integer|exists:carreras,id',
            'preceptor'=>'required|string|max:100',
        ]);

        //Actualizando el curso_divisions
        $Curso->update($request->all());
        
        //Elimina cache 
        Cache::forget('cursos_divisiones');

        //Retorna a la vista
        return redirect()->route('curso.index')->with('MsjExito','Se actualizó un curso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursoDivision $curso)
    {
        try {
            //Intenta eliminar el curso y mostrar un msj
            $curso->delete();
            //Elimina cache 
            Cache::forget('cursos_divisiones');
            
            return redirect()->route('curso.index')->with('MsjExito','Se elimino un curso exitosamente');

        } catch (Exception $e) {
            //Si el proceso fallo muestra un mensaje
            return redirect()->route('curso.index')->with('MsjFalla','No se pudo eliminar curso porque esta asociada a otras entidades como alumnos, ciclos, etc.');

        }
    }
}
