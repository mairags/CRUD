<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'nomeVendedor',
        'nomeCliente',
        'total',
        'quantidade',
        'produto_id',
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'vendas';
    
    public function produto()
    {
        return $this->belongsTo('App\Modelos\Produto');
    }
}
