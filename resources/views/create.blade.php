@extends('base')
@section('content')
    <h2>Cadastrar Novo Produto</h2>
    <form class="form" method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="Nome">Preço:</label>
        <input type="number" name="price" id="price" required>
        <label for="Nome">Descrição:</label>
        <input type="text" name="description" id="description" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection