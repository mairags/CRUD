@extends('layout.app')
@section('title', 'Visualizar Produto')

@section('content')
    <div class="card">
    <div class="card-header">
        <h3>{{ $produto->nome }} - #{{ $produto->codigo }}</h3>
        <h5>{{$produto->descricao}} </h5>
    </div>
    <div class="card-body">
        <p>Preco: {{$produto->preco}} R$</p>
        <p>Fornecedor: {{$produto->fornecedor}}</p>
        <p>Marca: {{$produto->marca}} </p>
    </div>
    <div class="card-footer">
        <a class="btn btn-dark" href="/projetouesc/public/produto" role="button">Voltar</a>
    </div>
    
@endsection
