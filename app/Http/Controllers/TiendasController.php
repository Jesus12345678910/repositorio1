<?php

namespace App\Http\Controllers;

use App\Tienda;
use Illuminate\Http\Request;
use Session;
use redirect;
class TiendasController extends Controller
{
    public function index()
    {
      $tiendas = Tienda::paginate();

      return view('tiendas.store' , compact('tiendas'));
    }
    public function show(Tienda $tiendas)
    {
      return view ('tiendas/store' , ['Tienda' => $tienda]);
    }
    public function create()
    {
      return view ('tiendas/create');
    }
    public function store(Request $request)
    {
      //$usuario = new Usuario;
      //$usuario->nombre = request()->nombre;
      //$usuario->calle = request()->calle;
      //$usuario->save();
      $tiendas = Tienda::orderBy('nombre')->paginate(15);
      Tienda::create($request->all());


      return view ('/store', compact('tiendas'))->with('message','store');
    }
}
