<?php

namespace App\Http\Controllers;
use App\Models\SolicitudesContacto;
use Illuminate\Http\Request;

class SolicitudesContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $solicitudes_contacto = SolicitudesContacto::all();
        return $solicitudes_contacto;
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
        //
        $solicitudes_contacto = new SolicitudesContacto();

        //Estableciendo paramentros
        $solicitudes_contacto->nombre = $request->nombre; 
        $solicitudes_contacto->apellido = $request->apellido;
        $solicitudes_contacto->correo_electronico = $request->correo_electronico;
        $solicitudes_contacto->mensaje = $request->mensaje;
        $solicitudes_contacto->contactado = 0;

        $solicitudes_contacto->save();
        return $solicitudes_contacto;
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

    public function getContactos()
    {
        # code...
        return view('solicitudes.index');
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
    public function update(Request $request, $id)
    {
        //

        $solicitudes_contacto = SolicitudesContacto::find($id);
        
        $solicitudes_contacto->contactado = $request->contactado;

        $solicitudes_contacto->save();
        
        return $solicitudes_contacto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function destroy($id)
    {
        //
        return SolicitudesContacto::destroy($id);

    }
}
