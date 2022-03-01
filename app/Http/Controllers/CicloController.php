<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CicloController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna la vista con la lista de ciclos
        return view('ciclo.ciclo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna la vista para crear un ciclo
        return view('ciclo.nuevo-ciclo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //Validaciones para nuevo ciclo
            $request->validate([
                'ciclo'=>'required|integer|min:2015|max:9999|unique:ciclos',
                'lema'=>'required|string|max:150',
                'inicio'=>'required|date',
                'cierre'=>'required|date',
                'estado'=>'required|string|max:10|unique:ciclos',
            ]);

            //Crea un nuevo ciclo
            $ciclo=Ciclo::create([
                'ciclo'=>$request->ciclo,
                'lema'=>$request->lema,
                'inicio'=>$request->inicio,
                'cierre'=>$request->cierre,
                'colegio_id'=>1,
                'estado'=>$request->estado,
            ]);

            //Elimina cache 
            Cache::forget('ciclo_activo');
            Cache::forget('ciclos');
            
            //Retorna una vista
            return redirect()->route('ciclo.index')->with('MsjExito','Se creo un nuevo ciclo lectivo');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //Retorna a la pag anterior
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   //Busca si el ciclo que se quiere editar
        $ciclo=Ciclo::find($id);

        //Si el ciclo existe, muestra la vista
        if(!empty($ciclo)){
            //retorna la vista
            return view('ciclo.actualizar-ciclo',compact('ciclo'));
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
    public function update(Request $request, Ciclo $ciclo)
    {   //Validaciones para update
        $request->validate([
            'ciclo'=>'required|integer|min:2015|max:9999|unique:ciclos,ciclo,'.$ciclo->id,
            'lema'=>'required|string|max:150',
            'inicio'=>'required|date',
            'cierre'=>'required|date',
        ]);

        //Update sobre ciclo
        $ciclo->update([
            'ciclo'=>$request->ciclo,
            'lema'=>$request->lema,
            'inicio'=>$request->inicio,
            'cierre'=>$request->cierre,
            'colegio_id'=>1,
        ]);

        //Elimina cache 
        Cache::forget('ciclo_activo');
        Cache::forget('ciclos');

        //Redirige a la ruta ciclo.index
        return redirect()->route('ciclo.index')->with('MsjExito','Se actualizó un ciclo lectivo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciclo $ciclo)
    {
        try {
            //Intenta eliminar el ciclo
            $ciclo->delete();

            //Elimina cache 
            Cache::forget('ciclo_activo');
            Cache::forget('ciclos');

            //Si el proceso fue exitoso mostrara el sig mensaje
            return redirect()->route('ciclo.index')->with('MsjExito','Se elimino un ciclo exitosamente');

        } catch (Exception $e) {
            //Si el proceso fallo, muestra: 
            return redirect()->route('ciclo.index')->with('MsjFalla','No se pudo eliminar un ciclo porque esta asociada a otras entidades como alumnos, ciclos, inscripciones, etc.');

        }
    }

    public function close(){
        //Busca el ciclo que esta activo dentro de la tabla ciclos. Siempre deberia haber un solo ciclo activo
        $ciclo=Ciclo::where('estado','ACTIVO')->first();

        //Si no existe un ciclo activo, es necesario crear uno, por lo cual redirige a ciclo.create y muestra un mensaje
        if(empty($ciclo)){
            return redirect()->route('ciclo.create')->with('MsjExito','No existe un ciclo activo. Puede inaugurar un nuevo ciclo.');
        }
        //Sino te lleva a la vista para cerrar el ciclo que es la finalidad del metodo close()
        return view('ciclo.cerrar-ciclo',compact('ciclo'));
        
    }

    public function end(Request $request, Ciclo $ciclo){
        //Validaciones para cerrar el ciclo
        $request->validate([
            'ciclo'=>'required|integer|max:9999|unique:ciclos,ciclo,'.$ciclo->id,
        ]);

        //realiza el update sobre el estado del ciclo
        $ciclo->update([
            'estado'=>'INACTIVO',
        ]);

        //Elimina cache 
        Cache::forget('ciclo_activo');
        Cache::forget('ciclos');

        //Redirige a ciclo.index
        return redirect()->route('ciclo.index')->with('MsjExito','Se cerró un ciclo exitosamente.');

    }
}
