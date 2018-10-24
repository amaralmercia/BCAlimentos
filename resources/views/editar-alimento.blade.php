@extends('layout.base', ['current'=>'alimentos'])

@section('body')
    <h1>Editar Alimentos</h1>
    <form action = "/alimento/editar/{{$alimento->id}}" method="POST">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome do alimento</label>
            <input type = "text" class = "form-control" name="nomeAlimento" id = "nome" value = "{{$alimento->nome}}">
        </div>
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection