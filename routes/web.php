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

Route::get('/Detalle', function () {
    return view('DetalleManzanas');
});

Route::get('/informacion', 'PaginasController@info');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');
Route::get('/equipo', 'PaginasController@equipo');
Route::get('/productos', 'productosController@index')->name('productos.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>
