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

        return $caracteristica;
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
    public function edit(Caracteristica $caracteristica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caracteristica  $caracteristica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristica $caracteristica)
    {
        //
        $caracteristica = Caracteristica::find($request->id);
        $caracteristica->nombre = $request->nombre;
        $caracteristica->descripcion = $request->descripcion;
        $caracteristica->save();
        return $caracteristica;
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
        $caracteristica = Caracteristica::destroy($id);
        return $caracteristica;
    }
}
