<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//imports controller
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SolicitudesContactoController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ProductoCaracteristicasController;
use App\Http\Controllers\ProductoCategoriasController;
//Imports model
use App\Models\Categoria;
use App\Models\Imagen;
use App\Models\Orden;
use App\Models\Producto;
use App\Models\SolicitudesContacto;
use App\Models\User;
use App\Models\Caracteristica;



Route::get('/', function () {
    return view('welcome');
});


//Route::resource($name='solicitudes_contactos',SolicitudesContactoController::class);
Route::get('solicitudes_contactos', function () {
    $solicitudesContacto = SolicitudesContacto::all();
    return view('solicitudes.index')->with('solicitudes_contacto', $solicitudesContacto);
})->name('solicitudes_contactos')->middleware(['auth']);


Route::resource('solicitudes',SolicitudesContactoController::class);

Route::get('productos/create', function () {
    
    $categorias = Categoria::all();
    $caracteristicas = Caracteristica::all();
    return view('inventario.create')->with('categorias',$categorias)->with('caracteristicas', $caracteristicas);

    
})->name('productos/create')->middleware(['auth']);


Route::get('usuarios/edit', function () {
    
    return view('usuarios.edit');
    
})->name('usuarios/edit')->middleware(['auth']);

Route::get('productos', function () {
    $productos = Producto::all();
    foreach($productos as $producto)
        {
            $producto->caracteristicas;
            $producto->categorias;
            $producto->imagenes;
        }

    return view('inventario.index')->with('productos', $productos);
})->name('productos')->middleware(['auth']);

Route::get('categorias', function () {

    $categorias = Categoria::all();
    return view('categorias.index')->with('categorias', $categorias);
})->name('categorias')->middleware(['auth']);

Route::get('usuarios', function () {

    $usuarios = User::all();
    return view('usuarios.index')->with('usuarios', $usuarios);
})->name('usuarios')->middleware(['auth']);

Route::get('caracteristicas', function () {

    $caracteristicas = Caracteristica::all();
    return view('caracteristicas.index')->with('caracteristicas', $caracteristicas);

})->name('caracteristicas')->middleware(['auth']);

Route::get('ordenes', function () {

    $ordenes = Orden::all();
    return view('ordenes_compra.index')->with('ordenes', $ordenes);

})->name('ordenes')->middleware(['auth']);

Route::get('presentaciones', function () {

    $imagenes = Imagen::all();
    return view('presentaciones.index')->with('presentaciones', $imagenes);

})->name('presentaciones')->middleware(['auth']);

Route::get('presentaciones/create', function () {
    
    $productos = Producto::all();
    return view('presentaciones.create')->with('productos', $productos);
    
})->name('presentaciones/create')->middleware(['auth']);

Route::resource('presentacion_i', ImagenController::class)->middleware(['auth']);
Route::resource('categorias_i', CategoriaController::class)->middleware(['auth']);
Route::resource('caracteristica_i', CaracteristicaController::class)->middleware(['auth']);

Route::resource('producto_caracteristicas', ProductoCaracteristicasController::class)->middleware(['auth']);

Route::resource('producto_categoria', ProductoCategoriasController::class)->middleware(['auth']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
