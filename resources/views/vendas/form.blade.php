@extends('layout.app')
@section('title', 'Vender')
 
@section('content')
<h1>Vender</h1>
<hr>
 
<div class="container">
 
    {!! Form::open(['method' => 'post','route' => 'vendas.salvar', 'class' => 'form-horizontal']) !!}
    <div class="card">
        <div class="card-header">
      <span class="card-title">
            Venda de produtos
      </span>
        </div>
        <div class="card-body">
            <div class="form-row form-group">
                    {!! Form::label('nomeVendedor', 'Nome do Vendedor', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                    {!! Form::text('nomeVendedor', null, ['class' => 'form-control', 'placeholder'=>'Digite o nome do Vendedor']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                    {!! Form::label('nomeCliente', 'Nome do Cliente', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                    {!! Form::text('nomeCliente', null, ['class' => 'form-control', 'placeholder'=>'Digite o nome do Cliente']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                    {!! Form::label('quantidade', 'Quantidade', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                    {!! Form::text('quantidade', null, ['class' => 'form-control', 'placeholder'=>'Digite a quantidade', 'onchange' => 'alterarPreco()']) !!}
                </div>
            </div>
            <div class="form-row form-group">
                    {!! Form::label('produto_id', 'Produto', ['class' => 'col-form-label col-sm-2 text-right disabled']) !!}
                <div class="col-sm-4">
                    {!! Form::select('produto_id', $produtos->pluck('nome', 'id'), null, array('class'=>'form-control', 'onchange' => 'alterarPreco()')) !!}
                </div>
            </div>            
            <div class="form-row form-group">
                    {!! Form::label('total', 'Total (R$)', ['class' => 'col-form-label col-sm-2 text-right']) !!}
                <div class="col-sm-4">
                    {!! Form::text('total', null, ['class' => 'form-control', 'readonly' => 'true', 'placeholder'=>'0.00 R$']) !!}
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

<script>
    var modelProdutos = {!! json_encode($produtos, JSON_HEX_TAG) !!};

    function alterarPreco(){
        var produtoId = document.getElementById('produto_id').value;
        var quantidade = document.getElementById('quantidade').value;
        var total = document.getElementById('total');
        
        console.log(quantidade);


        modelProdutos.forEach(function(prod){
            if(prod.id == produtoId){
                total.value = prod.preco * quantidade;
            }

        })
    }
</script>

@endsection
