<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();

        foreach ($ordenes as $orden) {
            $orden->productos;
        }

        return $ordenes;
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
        $orden = new Orden();
        
        $orden->nombre = $request->nombre;
        $orden->correo_electronico = $request->correo_electronico;
        $orden->valor_total = 0;
        $orden->cantidad_productos = sizeof($request->productos);
        $orden->cancelado = 0;
        $orden->fecha_orden=now();

        $orden->save();
        $orden->productos()->attach($request->productos);
        
        
        $suma = 0;
        
        $productos = $orden->productos;
        foreach ($productos as $producto) 
        {
            $suma = $suma + $producto->valor;
        }

        $orden->valor_total = $suma;
        
        $orden->productos;

        $orden->save();
        
        return $orden;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $ordenes = Orden::findOrFail($request->id);
        $ordenes->id_userfk=$request->id_userfk;
        $ordenes->email_usuario=$request->email_usuario;
        $ordenes->fecha_orden=$request->fecha_orden;

        $ordenes->save();

        return $ordenes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ordenes = Orden::destroy($request->id);
        return $ordenes;
        
    }
}
