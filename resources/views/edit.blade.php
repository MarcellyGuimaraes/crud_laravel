@extends('base')
@section('content')
    <h2>Atualizar um Produto</h2>
    <form class="form" id="update-form" method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <label for="Nome">Nome:</label>
        <input type="text" name="name" id="name" required value="{{ $product->name }}">
        <label for="Nome">Preço:</label>
        <input type="number" name="price" id="price" required value="{{ $product->price }}">
        <label for="Nome">Descrição:</label>
        <input type="text" name="description" id="description" required value="{{ $product->description }}">
    </form>
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir" >Excluir</button>
    <form method="POST" class="form" id="delete-form" action="{{ route('products.destroy', $product->id) }}">
        @csrf
        @method('DELETE')
    </form>
@endsection