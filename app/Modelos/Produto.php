<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'marca',
        'fornecedor',
        'descricao',
        'codigo',
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';

    public function vendas()
    {
        return $this->hasMany('App\Modelos\Vendas');
    }
}

