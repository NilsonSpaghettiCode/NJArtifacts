<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Producto;
class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Imagen $imagen)
    {
        $imagenes = Imagen::all();
        
        return $imagenes;
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
        $imagen = new Imagen();
        $imagen->url_imagen = $request->url_imagen;
        $imagen->id_productopk = $request->id_producto;
        $imagen->save();

        return redirect('presentaciones');
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
        $imagen = Imagen::find($id);
        $producto = Producto::find($imagen->id_productopk);

        return view('presentaciones.edit', compact('imagen','producto'));
        
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
        $presentacion = Imagen::find($id);
        $presentacion->url_imagen = $request->url_imagen;
        $presentacion->save();
        return back()->with('response','Presentacion actualizada');
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
        $imagen_deleteada = Imagen::destroy($id);
        return redirect('presentaciones');
    }
}
