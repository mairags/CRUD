<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Produto;
use App\Modelos\Vendas;

/** usa algumas coisas do laravel pra consultar no banco sem precisar fazer código SQL
 **/
class VendasController extends Controller

{
    public function index()
    {
        $vendas = Vendas::all();
        return view('vendas.index', ['vendas' => $vendas]);
    }

    /** nessa função passamos um id e retornamos um produto achado com a função findOrFail e
     * retornamos esses dados pra view com o nome 'visualizar'
     */
    public function visualizar($id)
    {
        return view('vendas.visualizar', ['venda' => Vendas::findOrFail($id)]);
    }

    /** adicionar retorna a pagina aonde preenche informações do produto */
    public function adicionar()
    {
        $produtos = Produto::all();
        return view('vendas.form', ['produtos' => $produtos]);
    }

    public function salvar(Request $request)
    {
        $venda = Vendas::create($request->all());
       
        if($venda) {
            return redirect()->route('vendas.index');
        }
    }
}