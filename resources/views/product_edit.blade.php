@extends('master')

@section('content')
    

@if (session()->has('message'))
    {{session()->get('message')}}
@endif
<form action="{{route('products.update',['product' => $product->id])}}" method="post">
        <div class="form">
            <h3>Editar dados</h3>
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="nomeproduto" value="{{$product->nomeproduto}}">
            <input type="text" name="preco"  value="{{$product->preco}}">
            <input type="text" name="preco" value="{{$product->imagem}}">
            <textarea name="descricao" >{{$product->descricao}}</textarea>
            <button type="submit">Atualizar</button>
        </div>  
        >
</form>

@endsection