@extends('layout.base', ["current"=>"tipo"])

@section('body')
    <h1>Categorias</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tipo as $tipos)
      <tr>
        <td>{{$tipos->id}}</td>
        <td>{{$tipos->nome}}</td>
        <td>
          <a class = "btn btn-primary" href="/tipo/editar/{{$tipos->id}}">Editar</a>
          <a class = "btn btn-danger" href="/tipo/apagar/{{$tipos->id}}">Excluir</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection