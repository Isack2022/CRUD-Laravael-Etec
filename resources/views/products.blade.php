@extends('master')

@section('content')
    
<h2>Página de produtos</h2>

<ul>
    @foreach ($products as $product)
       <li>{{$product->nomeproduto}}</li> 
    @endforeach
</ul>

@endsection