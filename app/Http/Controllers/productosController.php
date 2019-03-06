<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class productosController extends Controller
{
    public function index()
    {
      $docs = DB::table('productos')->get();

      return view('documentos.productos', compact('docs'));
    }
}
