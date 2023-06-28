@extends('base')
@section('content')
    <h2>Produtos Cadastrados</h2>
    @if (!isset($products))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td>{{ $p->name }} </td>
                        <td> {{ $p->price }} </td>
                        <td> {{ $p->description }} </td>
                        {{-- vai para a rota show, passando o id como parâmetro --}}
                        <td> <a href="{{ route('products.show', $p->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('products.edit', $p->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Produtos Cadastrados: {{ $products->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection