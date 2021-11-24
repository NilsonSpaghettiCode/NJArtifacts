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

use App\Http\Controllers\ImagenController;



//Imports model

use App\Models\Categoria;
use App\Models\Imagen;
use App\Models\Orden;
use App\Models\Producto;
use App\Models\SolicitudesContacto;
use App\Models\User;


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
    
    return view('inventario.create');
    
})->name('productos/create')->middleware(['auth']);

Route::get('presentaciones/create', function () {
    
    return view('presentaciones.create');
    
})->name('presentaciones/create')->middleware(['auth']);

Route::get('productos', function () {
    $productos = Producto::all();
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

Route::get('ordenes', function () {

    $ordenes = Orden::all();
    return view('ordenes_compra.index')->with('ordenes', $ordenes);

})->name('ordenes')->middleware(['auth']);

Route::get('presentaciones', function () {

    $imagenes = Imagen::all();
    return view('presentaciones.index')->with('presentaciones', $imagenes);

})->name('presentaciones')->middleware(['auth']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
