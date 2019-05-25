@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h2>Listado de tiendas
<a href="/registroUsuario" class="btn btn-main pull-right">Nuevo</a></h2>

<table>
  <tr>
    <th>Nombre</th>
    <th>Calle</th>
    <th>Numero</th>
    <th>Colonia</th>
    <th>Ciudad</th>
    <th>Estado</th>
    <th>Codigo Postal</th>
    <th>Telefono</th>
  </tr>
  @foreach($tiendas as $tienda)
  <tr>
    <th>{{$tienda->nombre}}</th>
    <td>{{$tienda->calle}}</td>
    <td>{{$tienda->numero}}</td>
    <td>{{$tienda->colonia}}</td>
    <td>{{$tienda->ciudad}}</td>
    <td>{{$tienda->estado}}</td>
    <td>{{$tienda->codigo_postal}}</td>
    <td>{{$tienda->telefono}}</td>
  </tr>
   @endforeach
</table>
{{ $tiendas->links()}}
  <a href="/inicio" class="btn btn-main pull-right">Inicio</a>
<br>


</body>
</html>
@endsection
