<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;

use App\Models\Caracteristica;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Producto $productos) //El request puede traer consultas
    {
        //$productos = Producto::whereRelation('categorias', 'id_categoria', $request->id_categoria)->get();
        //$productos->categorias;
        if (isset($request->id_categoria)) {
            $productos = Producto::whereRelation('categorias', 'id_categoria', $request->id_categoria)->get();
        }else{
            $productos = Producto::all();
        }
        
        foreach($productos as $producto)
        {
            $producto->caracteristicas;
            $producto->categorias;
            $producto->imagenes;
        }
        
        //$productos->where('id_producto',8)->get();
        //$productos->all();
        //echo gettype($productos);
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $variable_registros->campo=$request->campo
        
        $producto = new Producto();

        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->valor=$request->valor;

        //ano-mes-dia
        //$productos->fecha_Insercion=$request->fecha_Insercion;
        $categorias = Categoria::all();
        $categoria_array = array();
        foreach ($categorias as $categoria) {
            # code...
            if ($categoria->nombre == "Todo") {
                array_push($categoria_array, $categoria->id_categoria);
            }
        }
        
        $producto->save();

        $producto->categorias()->attach($categoria_array);
        $producto->caracteristicas()->attach(Caracteristica::all());

        /**
         * Implementar despues de conocer forma de acceso
         */
        //$producto->categorias()->attach([1,2,3]); 
       //$producto->caracteristicas()->attach([1,2,4]);

        
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_producto)
    {
        //
        
        $producto = Producto::find($id_producto);
        $producto->caracteristicas;
        $producto->categorias;
	    $producto->imagenes;
        return $producto;
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
        $productos = Producto::findOrFail($request->id);
        $productos->valor=$request->valor;
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->images_list=$request->images_list;
        $productos->categoria=$request->categoria;
        $productos->cantidad=$request->cantidad;

        $productos->fecha_Insercion=$request->fecha_Insercion;
        $productos->save();

        return $productos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->caracteristicas()->detach();
        $producto->categorias()->detach();
        foreach ($producto->imagenes as $imagen) {
            $imagen->delete();
        }
        $producto->delete();

        return redirect('productos');
    }

}
