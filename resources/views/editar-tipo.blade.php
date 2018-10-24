@extends('layout.base', ['current'=>'tipos'])

@section('body')
    <h1>Editar categoria</h1>
    <form action = "/tipo/editar/{{$tipo->id}}" method="POST">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome da Categoria</label>
            <input type = "text" class = "form-control" name="nomeTipo" id = "nome" value = "{{$tipo->nome}}">
        </div>
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection