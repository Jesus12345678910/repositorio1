@extends ('layouts.app')

@section('content')
<div class="row">
    <div class="col -5 offset-1">
      <table class="table">
        <caption>Programadores</caption>

        <thead  class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Codigo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Jesus Alberto</td>
            <td>Garcia Zamudio</td>
            <td>212566697</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Eduardo Daniel</td>
            <td>Chavez Rodriguez</td>
            <td>1234526</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Saul Eduardo</td>
            <td>Gonzalez</td>
            <td>216308633</td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
@endsection
