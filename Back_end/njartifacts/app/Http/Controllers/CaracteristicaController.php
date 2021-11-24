<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $caracteristicas = Caracteristica::all();

        return $caracteristicas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('caracteristicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //caracteristica

        $caracteristica = new Caracteristica();
        
        $caracteristica->nombre = $request->nombre; 
        $caracteristica->descripcion = $request->descripcion;

        $caracteristica->save();

        return back()->with('response','Caracteristica creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristica $caracteristica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $caracteristica = Caracteristica::find($id);
        return view('caracteristicas.edit', compact('caracteristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $caracteristica = Caracteristica::find($id);
        $caracteristica->nombre = $request->nombre;
        $caracteristica->descripcion = $request->descripcion;
        $caracteristica->save();
        return back()->with('response','Caracteristica actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $caracteristica = Caracteristica::find($id);
        $caracteristica->productos()->detach();
        $caracteristica->delete();
        return back()->with('response','Caracteristica eliminada con exito');
    }
}
