@extends ('layouts.app')
@section('content')

  <div class="row">
  <div class="col-8">
    <h1>Productos de {{session('apodo')}}</h1>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
      @foreach($docs as $doc)
      <tr>
        <td>{{$doc->id}}</td>
        <td>{{$doc->nombre}}</td>
        <td>{{$doc->cantidad}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
  @endsection
