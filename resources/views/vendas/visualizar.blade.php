@extends('layout.app')
@section('title', 'Detalhes da Venda')

@section('content')
    <div class="card">
    <div class="card-header">
        <h3>#{{ $venda->id }} - R$ {{ $venda->total }}</h3>
        <h5>Foram vendidos(as) {{ $venda->quantidade }} {{ $venda->produto->nome }}(s)</h3>
    </div>
    <div class="card-body">
        <p>Nome do Vendedor: {{$venda->nomeVendedor}} </p>
        <p>Nome do Cliente: {{$venda->nomeCliente}}</p>
        <hr>
        <p>Produto: {{$venda->produto->nome}} </p>
        <p>Código: {{$venda->produto->codigo}} </p>
        <p>Preço Unitário: {{$venda->produto->preco}} R$</p>
        <p>Marca: {{$venda->produto->marca}} </p>
        <p>Fornecedor: {{$venda->produto->fornecedor}} </p>
    </div>
    <div class="card-footer">
        <a class="btn btn-dark" href="/projetouesc/public/vendas" role="button">Voltar</a>
    </div>
@endsection
