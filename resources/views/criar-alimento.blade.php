@extends('layout.base', ['current'=>'alimento'])

@section('body')
    <h1>Novo Alimento</h1>
    <form action = "/alimento" method="POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">        
            <label for="nome">Nome do alimento</label>
            <input type = "text" class = "form-control" name="nomeAlimento" id = "nome" placeholder = "Nome do alimento">

            <label for="tipoAli">Tipo do alimento</label>
                <select id="tipo" name = "tipoAlimento" class="form-control">
                        <option value= "perecivel" >Perecível</option> 
                        <option value= "imperecivel" >Imperecível</option>                
                </select>

            <label for="dt_Fab">Data de fabricação</label>
            <input type = "date" class = "form-control" name="dtFab" id = "dtFab" placeholder = "Data de Fabricação">

            <label for="dtVal">Data de validade</label>
            <input type = "date" step="any" class = "form-control" name="dtVal" id = "dtVal" placeholder = "Data de Validade">
            
            <label for="tipo">Categoria do alimento</label>
            <select id="tipo" name = "catAlimento" class="form-control">
                @foreach($tipo as $tipos)
                    <option value= "{{$tipos->id}}">{{$tipos->nome}}</option>
                @endforeach                
            </select>
        
        
        </div>
    
        <button type="submit" class = "btn btn-success btn-sm">Salvar</button>
        <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
    </form>
@endsection