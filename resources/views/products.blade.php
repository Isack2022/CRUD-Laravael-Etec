@extends('master')

@section('content')
   
<ul>
    @foreach ($products as $product)
    <div class="card text-center margin">
        <div class="card-body">
          <h5 class="card-title">{{$product->nomeproduto}}</h5>
          <img src="{{$product->imagem}}" alt="Imagem do produto" class="img">
          <p class="card-text">{{$product->descricao}}</p>
          <p class="card-text">
            <a href="{{route('products.edit',['product' => $product->id])}}">Editar</a> | 
            <a href="">Deletar</a>
          </p>
        </div>
        <div class="card-footer text-body-secondary">
            R$:{{$product->preco}}
        </div>
      </div>  
    @endforeach
</ul>

@endsection