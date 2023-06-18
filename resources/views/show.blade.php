@extends('base')
@section('content')
    @if (isset($msg))
        <h3 style="color: red">Produto não encontrado!</h3>
    @else
        <h2>Mostrando dados do produto</h2>
        <p><strong>Nome:</strong> {{ $product->name }} </p>
        <p><strong>Preço:</strong> {{ $product->price }} </p>
        <p><strong>Descrição:</strong> {{ $product->description }} </p>
        <a href="{{ route('products.index') }}">Voltar</a>
    @endif
@endsection