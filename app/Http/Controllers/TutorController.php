<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tutor;
use App\Models\Ciudade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TutorController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna a la vista de tutores
        return view('tutor.tutor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //retorna  a la vista para crear un tutor
        return view('tutor.nuevo-tutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Validacion para generar un nuevo tutor
        $request->validate([
            'apellido'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'tutordni'=>'required|integer|digits_between:8,9|unique:tutors',
            'tutorcuil'=>'required|min:13|max:14|unique:tutors',
            'tutordireccion'=>'required|string|max:50',
            'telefono'=>'required',
            
    ]);
        //Crea un tutor en la BD
        $tutor=Tutor::create($request->all());

        //Eliminando cache, porque se crean tutores. 
        Cache::forget('tutores');

        //envia a una vista con un msj 
        return redirect()->route('tutor.index')->with('MsjExito','Se agregó un nuevo tutor.');

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
    {
        //Busca en el cache domicilios, sino lo crea
        if (Cache::has('domicilios')) {
            $domicilios=Cache::get('domicilios');
        } else {
           $domicilios=Ciudade::all();
            Cache::put('domicilios',$domicilios); 
        }
        
        //Busca un tutor por su id
        $tutor=Tutor::find($id);
      
        //Si existe el tutor muestra la vista para editar
        if(!empty($tutor)){
            return view('tutor.actualizar-tutor',compact('tutor','domicilios'));
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
    public function update(Request $request, Tutor $tutor)
    {
        //Validaciones para update
        $request->validate([
            'apellido'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'tutordni'=>'required|integer|digits_between:8,9|unique:tutors,tutordni,'.$tutor->id,
            'tutorcuil'=>'required|min:13|max:14|unique:tutors,tutorcuil,'.$tutor->id,
            'tutordireccion'=>'required|string|max:50',
            'telefono'=>'required',
            
    ]);
    //Actualiza el tutor
    $tutor->update($request->all());

      //Eliminando cache, porque update tutores. 
      Cache::forget('tutores');

    //Envia a la vista
    return redirect()->route('tutor.index')->with('MsjExito','Se actualizó un tutor.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        try {
            //Intenta eliminar un tutor
            $tutor->delete();

            //Eliminando cache,porque se elimino tutor. 
            Cache::forget('tutores');

            return redirect()->route('tutor.index')->with('MsjExito','Se elimino un tutor exitosamente.');

        } catch (Exception $e) {
            //Sino logra eliminar, muestra un error
            return redirect()->route('tutor.index')->with('MsjFalla','No se pudo eliminar el tutor porque esta asociada a otras entidades como inscripciones.');

        }

    }
}
