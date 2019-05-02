<?php

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/compras', function () {
    return view('comprass');
});

Route::get('/Detalle-Manzanas', function () {
    return view('DetalleManzanas');
});

Route::get('/Compras-Frutas-Verduras', function () {
    return view('ComprasFrutasyVerdurass');
});

Route::get('/Carrito', function () {
    return view('CarritoCompras');
});


Route::get ('cart/show', [
  'as' => 'cart/show',
  'uses' => 'CartController@Show'
]);

Route::get('/Compras-Bebidas','PaginasController@ComprasBebidas');
Route::get('/Compras-Alcohol','PaginasController@ComprasAlcohol');
Route::get('/Compras-CarnesFrias','PaginasController@ComprasCarnesF');
Route::get('/Compras-Cereales','PaginasController@ComprasCereales');
Route::get('/Compras-Lacteos','PaginasController@ComprasLacteos');
Route::get ('/Confirmacion', 'PaginasController@Confirmacion');
Route::get ('/Metodo-Pago', 'PaginasController@Pago');
Route::get('/informacion', 'PaginasController@info');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');
Route::get('/equipo', 'PaginasController@equipo');
Route::get('/productos', 'productosController@index')->name('productos.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>
