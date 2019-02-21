<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function info()
    {
      return view('pagina.informacion');
    }

    public function contacto()
    {
      return view('pagina.contacto');
    }

    public function bienvenida($nombre, $apellido= null)
    {
return view('paginas.bienvenida')
->with([
  'nombre'=>$nombre,
  'apellido'=>$apellido
]);
    }
}
