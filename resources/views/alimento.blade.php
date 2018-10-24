@extends('layout.base', ["current"=>"alimento"])

@section('body')
    <h1>Alimentos</h1>

    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo de Alimento</th>
      <th scope="col">Data de Fabricação</th>
      <th scope="col">Data de Validade</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alimento as $a)
        <tr>
          <td>{{ $a->id }}</td>
          <td>{{ $a->nome }}</td>
          <td>{{ $a->tipo_alimento }}</td>
          <td>{{ $a->data_fabricacao }}</td>
          <td>{{ $a->data_validade }}</td>
          <td>{{ $a->id_tipo }}</td>
          <td>
            <a class = "btn btn-primary" href="/alimento/editar/{{$a->id}}">Editar</a>
            <a class = "btn btn-danger" href="/alimento/apagar/{{$a->id}}">Excluir</a>
          </td>


        </tr>
    @endforeach
  </tbody>
</table>

@endsection