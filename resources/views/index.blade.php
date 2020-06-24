@extends('layout.app')
@section('title', 'Home')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Bem Vindo!</h1>
  <p class="lead">Esse sistema é para o projeto de Honda, professor da UESC.</p>
  <hr class="my-4">
  <p>É um sistema simples de simulação de mercado e vendas.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="produto" role="button">Listar Produtos</a>
    <a class="btn btn-primary btn-lg" href="vendas" role="button">Listar Vendas</a>
  </p>
</div>
@endsection