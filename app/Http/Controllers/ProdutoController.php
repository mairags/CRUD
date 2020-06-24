<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Produto;

/** usa algumas coisas do laravel pra consultar no banco sem precisar fazer código SQL
 **/
class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', ['produtos' => $produtos]);
    }

    /** nessa função passamos um id e retornamos um produto achado com a função findOrFail e
     * retornamos esses dados pra view com o nome 'visualizar'
     */
    public function visualizar($id)
    {
        return view('produto.visualizar', ['produto' => Produto::findOrFail($id)]);
    }

    /** adicionar retorna a pagina aonde preenche informações do produto */

    public function adicionar()
    {
        return view('produto.form');
    }

    public function editar($id)
    {
        $produto = Produto::findOrFail($id);
 
        if ($produto) {
            return view('produto.form', compact('produto'));
        } else {
            return redirect()->back();
        }
    }

    public function atualizar(Request $request, $id)
    {
        $produto = Produto::where('id', $id)->update($request->except('_token', '_method'));
     
        if ($produto) {
            return redirect()->route('produto.index');
        }
    }

    public function excluir($id)
    {
        $produto = Produto::where('id', $id)->delete();
       
        if ($produto) {
            return redirect()->route('produto.index');
        }
    }

    public function salvar(Request $request)
    {
        $produto = Produto::create($request->all());
       
        if($produto) {
            return redirect()->route('produto.index');
        }
    }
}