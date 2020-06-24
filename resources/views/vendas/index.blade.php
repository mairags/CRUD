@extends('layout.app')
@section('title', 'Visualizar Vendas')

@section('content')

<h1>Listagem de Vendas</h1>
<hr>
<button class="btn btn-primary"  onclick="location.href='{{ url('vendas/adicionar') }}'">Adicionar</button>

    <table class="table table-bordered table-striped table-sm my-3">
        <thead>
    <tr>
        <th>#</th>
        <th>Vendedor</th>
        <th>Cliente</th>
        <th>Quantidade</th>
        <th>Total</th>
        <th>Produto</th>
        <th>Ações</th>
    </tr>
        </thead>
        <tbody>
    @forelse($vendas as $venda)
    <tr>
        <td>{{ $venda->id }}</td>
        <td>{{ $venda->nomeVendedor }}</td>
        <td>{{ $venda->nomeCliente }}</td>
        <td>{{ $venda->quantidade }}</td>
        <td>{{ $venda->total }}</td>
        <td>{{ $venda->produto->nome }}</td>
        <td>
            <a href="{{ route('vendas.visualizar', ['id' => $venda->id]) }}" class="btn btn-primary btn-sm">Visualizar</a>
        </td>
        
    </tr>
    @empty
    <tr>
        <td colspan="6">Nenhum registro encontrado</td>
    </tr>
    @endforelse
        </tbody>
    </table>
@endsection