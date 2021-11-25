<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\ProductoCategorias; 

class ProductoCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos_categorias = ProductoCategorias::all();
       /* 
        foreach ($productos_categorias as $producto_categoria) {
            $producto_categoria->producto;
        }
        */
        return view('producto_categoria.index', compact('productos_categorias'));
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
        $categorias = Categoria::all();
        return view('producto_categoria.create',compact('productos', 'categorias'));
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
        $producto_categoria = new ProductoCategorias();
        $producto_categoria->id_productofk  = $request->id_producto;
        $producto_categoria->id_categoriafk = $request->id_categoria;
        $producto_categoria->save();
        //echo $producto_categoria;
        return back()->with('response','Producto x categoria creado');

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

        $producto_categoria_seleccionado = ProductoCategorias::find($id);
        $productos = Producto::all();
        $categorias = Categoria::all();

        $categoria_seleccionada = Categoria::find($producto_categoria_seleccionado->id_categoriafk);
        $producto_seleccionado = Producto::find($producto_categoria_seleccionado->id_productofk);
        
        return view('producto_categoria.edit', compact('producto_categoria_seleccionado','categoria_seleccionada','producto_seleccionado','productos', 'categorias'));
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
        $producto_categoria = ProductoCategorias::find($id);
        
        $producto_categoria->id_productofk = $request->id_producto;
        $producto_categoria->id_categoriafk = $request->id_categoria;
       $producto_categoria->save();
        //echo $producto_categoria;
        //echo "NEW" . $request->id_categoria;
        //echo $request;
        return back()->with('response', 'Se actualizo un Producto x categoria correctamente');

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
        $producto_categoria = ProductoCategorias::find($id);

        $producto_categoria->delete();

        return back()->with('response', 'Se elimino un Producto x caracteristica correctamente');
    }
}
