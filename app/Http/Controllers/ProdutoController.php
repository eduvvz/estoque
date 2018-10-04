<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;


class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);
    }


    public function mostra($id)
    {
        $resposta = Produto::find($id);
        if (empty($resposta)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $resposta);
    }

    public function novo()
    {
        return view('produto.novo');
    }

    public function adicionar()
    {
        
        Produto::create(Request::all());

        return redirect('/produtos')->withInput(Request::only('nome'));
    }

}