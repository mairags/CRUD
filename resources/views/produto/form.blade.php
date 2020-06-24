@extends('layout.app')
@section('title', 'Registro')
 
@section('content')
<h1>Registro</h1>
<hr>
 
<div class="container">
 
    @if(isset($produto))
        {!! Form::model($produto, ['method' => 'put', 'route' => ['produto.atualizar', $produto->id ], 'class' => 'form-horizontal']) !!}
    @else
        {!! Form::open(['method' => 'post','route' => 'produto.salvar', 'class' => 'form-horizontal']) !!}
    @endif
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($produto))
            Editando registro #{{ $produto->id }}
          @else
            Criando novo registro
          @endif
      </span>
        </div>
        <div class="card-body">
            <div class="form-row form-group">
                {!! Form::label('nome', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                {!! Form::label('preco', 'Preço', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('preco', null, ['class' => 'form-control', 'placeholder'=>'Defina o preço em R$']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                {!! Form::label('marca', 'Marca', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder'=>'Insira o nome da Marca']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                {!! Form::label('fornecedor', 'Fornecedor', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('fornecedor', null, ['class' => 'form-control', 'placeholder'=>'Insira o nome do Fornecedor']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                {!! Form::label('descricao', 'Descricao', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('descricao', null, ['class' => 'form-control', 'placeholder'=>'Descreva o produto']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                {!! Form::label('codigo', 'Codigo', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder'=>'Codigo do produto']) !!}
                </div>
            </div>
         
      </div>
        </div>
        <div class="card-footer">
            {!! Form::button('Voltar', ['class'=>'btn btn-dark', 'onclick' =>'windo:history.go(-1);']); !!}
            {!! Form::submit(  isset($produto) ? 'Atualizar' : 'Criar', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection