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
     * @param  \App\Models\ProductoCaracteristicas  $productoCaracteristicas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto_caracterisca_seleccionado = ProductoCaracteristicas::find($id);

        $productos = Producto::all();
        $caracteristicas = Caracteristica::all();
        $caracteristica_seleccionada = Caracteristica::find($producto_caracterisca_seleccionado->id_productopk);
        $producto_seleccionado = Producto::find($producto_caracterisca_seleccionado->id_caracteristicapk);
        
        return view('producto_caracteristicas.edit', compact('producto_caracterisca_seleccionado','caracteristica_seleccionada','producto_seleccionado','productos', 'caracteristicas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductoCaracteristicas  $productoCaracteristicas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoCaracteristicas $productoCaracteristicas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductoCaracteristicas  $productoCaracteristicas
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoCaracteristicas $productoCaracteristicas)
    {
        //
    }
}
