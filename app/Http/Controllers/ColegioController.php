<?php

namespace App\Http\Controllers;

use App\Models\Ciudade;
use App\Models\Colegio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ColegioController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Busca en cache domicilios, sino existe lo genera de forma permanente
        if (Cache::has('domicilios')) {
            $domicilios=Cache::get('domicilios');
        } else {
           $domicilios=Ciudade::all();
            Cache::put('domicilios',$domicilios); 
        }

        //Busca los datos del establecimiento (por defecto siempre id 1)
        $establecimiento=Colegio::find(1);
      
        return view('establecimiento.establecimiento',compact('establecimiento','domicilios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //Regresa  a la pag anterior
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //regresa a la pag anterior
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //Regresa a la pag anterior
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   //Regresa a la pag anterior
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colegio $establecimiento)
    {   //Validaciones para actualizar datos del establecimiento
        $request->validate([
            'nivel'=>'required|string|max:100',
            'nombre'=>'required|string|max:100',
            'cue'=>'required|string|max:100',
            'direccion'=>'required|string|max:100',
            'telefono'=>'required|string|max:100',
            'correo'=>'required|email',
            'rector'=>'required|string|max:100',
            'vicerrector'=>'required|string|max:100',
            'ciudad_id'=>'required|integer|exists:ciudades,id',
        ]);

        //Actualizando ....
        $establecimiento->update($request->all());
        //Elimina cache
        Cache::forget('establecimiento');

        //Retorna a la vista
        return redirect()->route('establecimiento.index')->with('MsjExito','Se actualizaron los datos del establecimiento correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //retorna  a la pag anterior
        return back();
    }
}
