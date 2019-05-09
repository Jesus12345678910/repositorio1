<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
      $usuarios = Usuario::all();

      return view('usuarios/index' , ['usuarios' => $usuarios]);
    }
    public function show(Usuario $usuario)
    {
      return view ('usuarios/show' , ['usuario' => $usuario]);
    }
    public function create()
    {
      return view ('usuarios/create');
    }
    public function store(Request $request)
    {
      //$usuario = new Usuario;
      //$usuario->nombre = request()->nombre;
      //$usuario->calle = request()->calle;
      //$usuario->save();
      Usuario::create($request->all());

      return view ('comprass');
    }
}
