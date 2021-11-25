<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Producto;
use App\Models\ProductoCaracteristicas;
use Illuminate\Http\Request;

class ProductoCaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto_caracteriscas = ProductoCaracteristicas::all();
        return view('producto_caracteristicas.index', compact('producto_caracteriscas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Producto::all();
        $caracteristicas = Caracteristica::all();
        return view('producto_caracteristicas.create', compact('productos', 'caracteristicas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto_caracteriscas = new ProductoCaracteristicas();
        
        $producto_caracteriscas->id_productopk = $request->id_producto;
        $producto_caracteriscas->id_caracteristicapk = $request->id_caracteristica;
        $producto_caracteriscas->save();

        return back()->with('response','Producto x caracteristica creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductoCaracteristicas  $productoCaracteristicas
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoCaracteristicas $productoCaracteristicas)
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
        $producto_caracterisca_seleccionado = ProductoCaracteristicas::find($id);

        $productos = Producto::all();
        $caracteristicas = Caracteristica::all();
        $caracteristica_seleccionada = Caracteristica::find($producto_caracterisca_seleccionado->id_caracteristicapk);
        $producto_seleccionado = Producto::find($producto_caracterisca_seleccionado->id_productopk);
        
        //echo "ProductoXCaracteristica: ". $producto_caracterisca_seleccionado;
        //echo '<br></br>';
        //echo "Caracteristica del ProductoXCaracteristica" . $caracteristica_seleccionada;
        //echo '<br></br>';
        //echo "Producto del ProductoXCaracteristica" . $producto_seleccionado;
        
        return view('producto_caracteristicas.edit', compact('producto_caracterisca_seleccionado','caracteristica_seleccionada','producto_seleccionado','productos', 'caracteristicas'));
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
        $ProductoCaracteristica = ProductoCaracteristicas::find($id);
        
        $ProductoCaracteristica->id_productopk = $request->id_producto;
        $ProductoCaracteristica->id_caracteristicapk = $request->id_caracteristica;
        
        $ProductoCaracteristica->save();

        return back()->with('response', 'Se actualizo un Producto x caracteristica correctamente');
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
        $ProductoCaracteristica = ProductoCaracteristicas::find($id);
        $ProductoCaracteristica->delete();

        return back()->with('response', 'Se elimino un Producto x caracteristica correctamente');
    }
}
