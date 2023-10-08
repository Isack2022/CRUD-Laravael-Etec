@extends('master')

@section('content')
    


<h2>Página de editar</h2>
@if (session()->has('message'))
    {{session()->get('message')}}
@endif
<form action="{{route('products.update',['product' => $product->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="nomeproduto" value="{{$product->nomeproduto}}">
        <input type="text" name="preco" placeholder="R$:" value="{{$product->preco}}">
        <input type="text" name="descricao" placeholder="R$:" value="{{$product->descricao}}">
        <button type="submit">Atualizar</button>
</form>

@endsection