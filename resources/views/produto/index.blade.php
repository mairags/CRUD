@extends('layout.app')
@section('title', 'Visualizar Produto')

@section('content')

<h1>Listagem de Produtos</h1>
<hr>
<button class="btn btn-primary"  onclick="location.href='{{ url('produto/adicionar') }}'">Adicionar</button>

    <table class="table table-bordered table-striped table-sm my-3">
        <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Preco</th>
        <th>Marca</th>
        <th>Fornecedor</th>
        <th>Ações</th>
    </tr>
        </thead>
        <tbody>
    @forelse($produtos as $produto)
    <tr>
        <td>{{ $produto->id }}</td>
        <td>{{ $produto->nome }}</td>
        <td>{{ $produto->descricao }}</td>
        <td>{{ $produto->preco }}</td>
        <td>{{ $produto->marca }}</td>
        <td>{{ $produto->fornecedor }}</td>
        <td>
            <a href="{{ route('produto.visualizar', ['id' => $produto->id]) }}" class="btn btn-primary btn-sm">Visualizar</a>
            <a href="{{ route('produto.editar', ['id' => $produto->id]) }}" class="btn btn-info btn-sm">Editar</a>
            <form method="POST" action="{{ route('produto.excluir', ['id' => $produto->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
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