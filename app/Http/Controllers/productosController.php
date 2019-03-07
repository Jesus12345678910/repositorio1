<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use App/productos
use Illuminate\Http\Request;


class productosController extends Controller
{
    public function index()
    {
      //$docs = \DB;
      $docs = DB::table('productos')->get();
      /*$docs = Producto::where('id','>','1')
      ->orWhere('dirigido','Abarrotes')
      ->where('envia','Pedro')
      ->get();*/
      return view('documentos.productos', compact('docs'));
    }
}
