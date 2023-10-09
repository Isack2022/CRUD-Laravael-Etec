@extends('master')

@section('content')
    
<form action="{{route('products.store')}}" method="post">
        <div class="form">
            <h3>Cadastrar Produto   </h3>
            @csrf
            <input type="text" name="nomeproduto" placeholder="Nome do produto">
            <input type="text" name="preco" placeholder="Valor:(somente número)" >
            <input type="text" name="imagem" placeholder="Url da imagem" >
            <input type="text" name="descricao" placeholder="Descrição do produto">
            <button type="submit">Cadastra-se</button>
        </div>  
        >
</form>

@endsection